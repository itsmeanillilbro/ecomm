<?php
namespace App\Helpers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartManagement
{
    private static function getCart()
{

    if (Auth::check()) {
        $user = Auth::user();
        return Cart::firstOrCreate(['user_id' => $user->id]);
    } else {

        return session()->get('cart', new Cart());
    }
}

    static public function addItemsToCart($product_id)
{
    $cart = self::getCart();
    $existingItem = CartItem::where('cart_id', $cart->id)
        ->where('product_id', $product_id)
        ->first();

    if ($existingItem) {
        $existingItem->increment('quantity');
        $existingItem->total_amount = $existingItem->quantity * $existingItem->unit_amount;
        $existingItem->save();
    } else {
        $product = Product::find($product_id);
        if ($product) {
            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $product_id,
                'quantity' => 1,
                'unit_amount' => $product->price,
                'total_amount' => $product->price,
                'image' => $product->images[0] ,
            ]);
        }
    }
    return CartItem::where('cart_id', $cart->id)->count();
}


    static public function removeItemsFromCart($product_id)
    {
        $cart = self::getCart();
        CartItem::where('cart_id', $cart->id)
            ->where('product_id', $product_id)
            ->delete();

        return CartItem::where('cart_id', $cart->id)->get();
    }

    static public function addItemsToCartWithQuantity($product_id, $qty=1)
{
    $cart = self::getCart();
    $existingItem = CartItem::where('cart_id', $cart->id)
        ->where('product_id', $product_id)
        ->first();

    if ($existingItem) {
        $existingItem->quantity = $qty;
        $existingItem->total_amount = $existingItem->quantity * $existingItem->unit_amount;
        $existingItem->save();
    } else {
        $product = Product::find($product_id);
        if ($product) {
            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $product_id,
                'quantity' => $qty,
                'unit_amount' => $product->price,
                'total_amount' => $product->price * $qty,
                'image' => $product->images[0],
            ]);
        }
    }
    return CartItem::where('cart_id', $cart->id)->count();
}


    static public function addCartItemsTOCookie($cart_items)
    {
        // Not needed anymore
    }

    static public function clearCartItems()
    {
        $cart = self::getCart();
        CartItem::where('cart_id', $cart->id)->delete();
    }

    static public function getCartItemsFromCookie()
    {
        $cart = self::getCart();
        return CartItem::where('cart_id', $cart->id)->get();
    }

    static public function incrementQuantityToCartItem($product_id)
    {
        $cart = self::getCart();
        $item = CartItem::where('cart_id', $cart->id)
            ->where('product_id', $product_id)
            ->first();

        if ($item) {
            $item->increment('quantity');
            $item->total_amount = $item->quantity * $item->unit_amount;
            $item->save();
        }
        return CartItem::where('cart_id', $cart->id)->get();
    }

    static public function decrementQuantityFromCartItem($product_id)
    {
        $cart = self::getCart();
        $item = CartItem::where('cart_id', $cart->id)
            ->where('product_id', $product_id)
            ->first();

        if ($item && $item->quantity > 1) {
            $item->decrement('quantity');
            $item->total_amount = $item->quantity * $item->unit_amount;
            $item->save();
        }
        return CartItem::where('cart_id', $cart->id)->get();
    }

    static public function grandTotal($items)
    {
        return array_sum(array_column($items->toArray(), 'total_amount'));
    }
}
