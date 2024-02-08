<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameMobile;

class GameMobileController extends Controller
{
    public function index()
    {
        $gamesMobile = GameMobile::all();
        return view('home', compact('gamesMobile'));
    }

    public function showForm($id)
    {
        $game = GameMobile::find($id);
        return view('topup.formMobile', ['game' => $game]);
    }

    public function processTopUp(Request $request, $id)
    {
        // Validasi data formulir top-up
        $request->validate([
            'uid' => 'required',
            'email' => 'nullable|email',
            'topup_amount' => 'required|numeric',
            'payment_method' => 'required',
            
        ]);

        // Proses top-up, misalnya simpan ke database
        // ...

        return redirect('/')->with('success', 'Top-up berhasil!');
    }
}
