<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cloth;

class FavoritesController extends Controller
{
    public function addToFavorites(Request $request)
    {
        $clothId = $request->input('cloth_id');
        $favoriteItems = session()->get('favoriteItems', []);
        $favoriteItems[] = $clothId;
        session()->put('favoriteItems', $favoriteItems);
        return redirect()->back()->with('success', 'Item added to favorites!');
    }

    public function favorites()
    {
        $favoriteItemIds = session()->get('favoriteItems', []);
        $favoriteItems = Cloth::whereIn('id', $favoriteItemIds)->get();
        return view('favorites', compact('favoriteItems'));
    }
}
