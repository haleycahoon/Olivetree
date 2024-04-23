<?php

namespace App\Http\Controllers;

use App\Models\Cloth;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function addItem(Request $request)
{
    $clothId = $request->input('cloth_id');
    // Logic to add item to favorites, e.g., store in session or database
    $favoriteItems = session()->get('favoriteItems', []);
    $favoriteItems[] = $clothId;
    session()->put('favoriteItems', $favoriteItems);
    return redirect()->back()->with('success', 'Item added to favorites!');
}

public function index()
{
    $favoriteItemIds = session()->get('favoriteItems', []);
    $favoriteItems = Cloth::whereIn('id', $favoriteItemIds)->get();
    return view('favorites', compact('favoriteItems'));
}
}

