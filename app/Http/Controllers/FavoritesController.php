<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cloth;

class FavoritesController extends Controller
{
//     public function addItem(Request $request)
// {
//     $clothId = $request->input('cloth_id');
//     $cartItems = session()->get('cartItems', []);
//     $cartItems[] = $clothId;
//     session()->put('cartItems', $cartItems);
//     return redirect()->back()->with('success', 'Item added to cart!');
// }

// public function index()
// {
//     $cartItemIds = session()->get('cartItems', []);
//     $cartItems = Cloth::whereIn('id', $cartItemIds)->get();
//     return view('cart', compact('cartItems'));
// }
    
}
