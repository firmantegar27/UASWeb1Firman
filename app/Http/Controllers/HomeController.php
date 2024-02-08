<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameMobile;
use App\Models\GamePC;
use App\Models\GameAll;

class HomeController extends Controller
{
    public function titles(){
        return view('home', [
        "title" => "Home"
    ]);
    }

    public function index()
    {
        $gamesMobile = GameMobile::all();
        $gamesPC = GamePC::all();
        $gamesAll = GameAll::all();

        return view('home', compact('gamesMobile', 'gamesPC', 'gamesAll'));
    }

    // public function showForm($game)
    // {
    //     // Mengambil informasi game dari database atau model sesuai dengan $game
    //     $gameInfo = GameAll::find($game);

    //     return view('topup.form', ['gameInfo' => $gameInfo]);
    // }
    // public function showForm($slug)
    // {
    //     $gameInfo = GameAll::where('slug', $slug)->first();

    //     return view('topup.form', ['gameInfo' => $gameInfo]);
    // }
    public function showForm($id)
    {
        $gameInfo = GameAll::find($id);

        if (!$gameInfo) {
            abort(404); // Atau tindakan lain sesuai kebutuhan
        }

        return view('topup.form', ['gameInfo' => $gameInfo]);
    }

    public function topup(Request $request)
    {
        // Tangani logika top-up di sini
        // $request->input('email');
        // $request->input('game');
        // $request->input('amount');

        return "Top-up successful!";
    }
}
