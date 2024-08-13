<?php
namespace App\Livewire\Partials;

use App\Helpers\CartManagement;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\Category;

class Header extends Component
{
    public $total_count = 0;
    public $categories = [];

    public function mount()
    {
        $this->total_count = count(CartManagement::getCartItemsFromCookie());
        $this->categories = Category::with(['subcategories' => function($query) {
            $query->where('is_active', 1);
        }])->where('is_active', 1)->take(6)->get();
        }

    #[On('update-cart-count')]
    public function updateCartCount($total_count)
    {
        $this->total_count = $total_count;
    }

    public function render()
    {
        return view('livewire.partials.header', [
            'categories' => $this->categories,
        ]);
    }
}
