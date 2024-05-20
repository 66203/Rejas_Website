<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Fragrance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{   
    public function index()
    {
        $user = Auth::user();

        // Fetch orders related to the user
        $orders = Order::where('user_id', $user->id)->get();
        $cartItems = Cart::with('fragrance')->get();
        $totalPrice = Cart::join('fragrances', 'carts.fragrance_id', '=', 'fragrances.id')
            ->sum('fragrances.price');
        return view('placeorder', [
            'cartItems' => $cartItems,
            'totalPrice' => $totalPrice,
            'orders'=> $orders,
        ]);
    }

    public function addToCart($fragrance_id){
        $user = Auth::user();

        $user_id = Auth::id();
        $cart = new Cart();
        $cart->user_id = $user_id;
        $cart->fragrance_id = $fragrance_id;
        $cart->save();

        

        return redirect()->route('home');

    }
    public function destroyItem($rowId)
    {
        Cart::destroy($rowId);
        session()->flash('status', 'Item removed from cart successfully!');
        return redirect()->route('cart.index');
    }

    public function placeOrder(Request $request)
    {
        $user_id = Auth::id();
        $cartItems = Cart::where('user_id', $user_id)->get();

        // Calculate the total price based on fragrance prices
        $totalPrice = 0;
        foreach ($cartItems as $cartItem) {
            $fragrancePrice = Fragrance::find($cartItem->fragrance_id)->price;
            $totalPrice += $fragrancePrice;
        }

        // Create a new order
        $order = new Order();
        $order->user_id = $user_id;
        $order->total_price = $totalPrice;
        $order->status = 'pending'; // Assuming initial status is 'pending'
        $order->save();

        // Clear the user's cart
        Cart::where('user_id', $user_id)->delete();

        return redirect()->route('cart.index')->with('success', 'Order placed successfully!');
    }
}
