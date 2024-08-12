<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Header;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;

class CartPage extends Component
{

    public $total_count = 0;


    use LivewireAlert;
    #[Title('Cart - Prakriti Store')]
    public $cart_items = [];
    public $grand_total;

    public function mount()
    {
        $this->cart_items = CartManagement::getCartItemsFromCookie();
        $this->grand_total = CartManagement::grandTotal($this->cart_items);
        $this->total_count = count(CartManagement::getCartItemsFromCookie());
    }
    #[On('update-cart-count')]
    public function updateCartCount($total_count)
    {
        $this->total_count = $total_count;
    }

    public function increaseQty($product_id)
    {
        $this->cart_items = CartManagement::incrementQuantityToCartItem($product_id);
        $this->grand_total = CartManagement::grandTotal($this->cart_items);
    }

    public function decreaseQty($product_id)
    {

     $this->cart_items = CartManagement::decrementQuantityFromCartItem($product_id);
        $this->grand_total = CartManagement::grandTotal($this->cart_items);
    }



    public function removeItem($product_id)
    {
        $this->cart_items = CartManagement::removeItemsFromCart($product_id);
        $this->grand_total = CartManagement::grandTotal($this->cart_items);
        $this->dispatch('update-cart-count', total_count: count($this->cart_items))->to(Header::class);
        $this->alert('success', 'Product deleted successfully', [
            'position' => 'top-end',
            'toast' => true,
            'timerProgressBar' => true,
            'timer' => 3000,

        ]);
    }

    public function render()
    {
        return view('livewire.cart-page');
    }
}
