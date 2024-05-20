<?php

namespace App\Http\Controllers;

use App\Models\Fragrance;
use App\Models\Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $fragrances_male = Fragrance::where('gender', 'male')->get();
        $fragrances_female = Fragrance::where('gender', 'female')->get();
        $fragrances_unisex = Fragrance::where('gender', 'unisex')->get();

        $cartItems = Cart::with('fragrance')->get();
        $itemCount = $cartItems->count();
        $totalPrice = Cart::join('fragrances', 'carts.fragrance_id', '=', 'fragrances.id')
            ->sum('fragrances.price');
        
        return view('home', [
            'fragrances_male'=> $fragrances_male, 
            'fragrances_female'=> $fragrances_female,
            'fragrances_unisex'=> $fragrances_unisex,
            'cartItems' => $cartItems,
            'totalPrice' => $totalPrice,
            'itemCount' => $itemCount,
        ]);
        
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
}
