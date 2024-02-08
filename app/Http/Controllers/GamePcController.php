<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GamePC;

class GamePcController extends Controller
{
    public function index()
    {
        $gamesPC = GamePC::all();
        return view('home', compact('gamesPC'));
    }

    // public function showForm($id)
    // {
    //     $game = GamePC::find($id);
    //     return view('topup.formPC', ['game' => $game]);
    // }

    // public function processTopUp(Request $request, $id)
    // {
    //     // Validasi data formulir top-up
    //     $request->validate([
    //         'uid' => 'required',
    //         'email' => 'nullable|email',
    //         'topup_amount' => 'required|numeric',
    //         'payment_method' => 'required',
            
    //     ]);

    //     // Proses top-up, misalnya simpan ke database
    //     // ...

    //     return redirect('/')->with('success', 'Top-up berhasil!');
    // }

    public function showGamePCForm()
{
    $gamePC = GamePC::find(1); // Gantilah 1 dengan ID game yang sebenarnya
    return view('formPC', ['game' => $gamePC]);
}
}
