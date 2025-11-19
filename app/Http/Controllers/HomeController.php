<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredGames = Game::where('is_featured', true)->take(8)->get();
        $specialOffers = Game::whereNotNull('discount_price')->take(8)->get();
        $bestRated = Game::take(8)->get();

        return view('home', compact('featuredGames', 'specialOffers', 'bestRated'));
    }
}
