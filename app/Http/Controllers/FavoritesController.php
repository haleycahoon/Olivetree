<?php

namespace App\Http\Controllers;

use App\Models\FavoriteClothes;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function favorites()
    {
        $favoriteClothes = FavoriteClothes::paginate(10);

        return view('favorites', compact('favoriteClothes'));
    }

    public function addToFavorites(Request $request)
    {
        $clothId = $request->input('cloth_id');

        FavoriteClothes::updateOrCreate(
            ['cloth_id' => $clothId],
            ['cloth_id' => $clothId]
        );

        return response()->json(['success' => true]);
    }
}
