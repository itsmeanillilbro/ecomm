<?php

namespace App\Livewire;

use App\Models\Address;
use App\Models\Order;
use App\Models\Orderitem;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Order Details - Prakriti Store')]
class OrderDetailPage extends Component
{

    public $order_id;

    public function mount($order_id){
        $this->order_id = $order_id;
    }
    public function render()
    {
        $order_items = Orderitem::with('product')->where('order_id', $this->order_id)->get();
        $address = Address::where('order_id',$this->order_id)->first();
        $order = Order::where('id',$this->order_id)->first();
        return view('livewire.order-detail-page',[

            'order_items'=>$order_items,
            'address'=>$address,
            'order'=>$order
        ]);
    }
}
