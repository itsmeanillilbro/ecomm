<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Mail\OrderPlaced;
use App\Models\Address;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Title;
use Livewire\Component;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class CheckoutPage extends Component
{
    #[Title('Checkout -Prakriti Store')]

    public $first_name, $last_name, $phone, $city, $state, $zip_code, $payment_method, $street_address;

public function mount(){
    $cart_items = CartManagement::getCartItemsFromCookie();
if(count($cart_items)==0){
    return redirect('/products');
}
}

private function initiatePaymentWithKhalti()
{
    $curl = curl_init();

    $data = array(
        'return_url' => 'http://example.com/',
        'website_url' => 'https://example.com/',
        'amount' => 1000,
        'purchase_order_id' => 'Order01',
        'purchase_order_name' => 'test',
        'customer_info' => array(
            'name' => 'Test Bahadur',
            'email' => 'test@khalti.com',
            'phone' => '9800000001'
        )
    );

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://a.khalti.com/api/v2/epayment/initiate/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Key live_secret_key_68791341fdd94846a146f0457ff7b455',
            'Content-Type: application/json',
        ),
    ));

    $response = curl_exec($curl);
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    if (curl_errno($curl)) {
        curl_close($curl);
        throw new \Exception('cURL Error: ' . curl_error($curl));
    }

    curl_close($curl);

    return ['response_code' => $httpCode, 'response' => $response];
}

    public function placeOrder()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'payment_method' => 'required',
        ]);

        $cart_items = CartManagement::getCartItemsFromCookie();

        $cart_items_array = $cart_items->map(function($item) {
            return [
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'unit_amount' => $item->unit_amount,
                'total_amount' => $item->total_amount,
                'image' => $item->image, // Include image if needed
            ];
        })->toArray();
        $line_items = [];
        foreach ($cart_items as $item) {
            $line_items[] = [
                'price_data' => [
                    'currency' => 'npr',
                    'unit_amount' => $item['unit_amount'] * 100,
                    'product_data' => [
                        'name' => $item['name'],
                    ],

                ],
                'quantity' => $item['quantity']
            ];
        }
        $order = new Order();
        $order->user_id = auth()->user()->id;
        $order->grand_total = CartManagement::grandTotal($cart_items);
        $order->payment_method = $this->payment_method;
        $order->payment_status = 'pending';
        $order->status = 'new';
        $order->currency = 'npr';
        $order->shipping_amount = 0;
        $order->shipping_method = 'none';
        $order->notes = auth()->user()->name . ' placed the order';

        $address = new Address();
        $address->first_name = $this->first_name;
        $address->last_name = $this->last_name;
        $address->phone = $this->phone;
        $address->street_address = $this->street_address;
        $address->zip_code = $this->zip_code;
        $address->city = $this->city;
        $address->state = $this->state;

        $redirect_url = '';
        if ($this->payment_method == 'stripe') {
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $sessionCheckout = Session::create([
                'payment_method_types' => ['card'],
                'customer_email' => auth()->user()->email,
                'line_items' => $line_items,
                'mode' => 'payment',
                'success_url' => route('success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('cancel'),
            ]);
            $redirect_url = $sessionCheckout->url;
        } elseif ($this->payment_method == 'khalti') {
            $response = $this->initiatePaymentWithKhalti();
            $responseData = json_decode($response['response'], true);
            if ($response['response_code'] == 200 && isset($responseData['payment_url'])) {
                $redirect_url = $responseData['payment_url'];
            } else {
                throw new \Exception('Khalti payment initiation failed: ' . $response['response']);
            }
        } else {
            $redirect_url = route('success');
        }


        $order->save();
        $address->order_id = $order->id;
        $address->save();
        $order->itemss()->createMany($cart_items_array);
        CartManagement::clearCartItems();
        Mail::to(request()->user())->send(new OrderPlaced($order));
        return redirect($redirect_url);

    }
    public function render()
    {
        $cart_items = CartManagement::getCartItemsFromCookie();
        $grand_total = CartManagement::grandTotal($cart_items);

        return view('livewire.checkout-page', [
            'cart_items' => $cart_items,
            'grand_total' => $grand_total
        ]);
    }
}
