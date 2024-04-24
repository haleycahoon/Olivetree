<?php

namespace App\Http\Controllers;

use App\Models\FavoriteClothes;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function favorites()
    {
        // Fetch all favorite clothes (no authentication or guest identifier required)
        $favoriteClothes = FavoriteClothes::paginate(10);

        return view('favorites', compact('favoriteClothes'));
    }

    public function addToFavorites(Request $request)
    {
        $clothId = $request->input('cloth_id');

        // Create or update the favorite without any user or guest identifier
        FavoriteClothes::updateOrCreate(
            ['cloth_id' => $clothId],
            ['cloth_id' => $clothId]
        );

        return response()->json(['success' => true]);
    }
}
