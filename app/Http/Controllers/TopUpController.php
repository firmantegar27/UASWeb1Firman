<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameAll;
use App\Models\GameMobile;
use App\Models\GamePC;

class TopUpController extends Controller
{
    public function showForm($id)
    {
        $game = GameAll::find($id);
        return view('topup.form', ['game' => $game]);
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

    public function showTopUpForm($type, $id) {
        // Sesuaikan dengan nama model dan logika aplikasi Anda
        if ($type === 'game-all') {
            $game = GameAll::find($id);
            return view('topup.form', ['game' => $game]);
        } elseif ($type === 'game-mobile') {
            $game = GameMobile::find($id);
            return view('topup.formMobile', ['game' => $game]);
        } elseif ($type === 'game-pc') {
            $game = GamePC::find($id);
            return view('topup.formPC', ['game' => $game]);
        } else {
            // Handle jika jenis game tidak dikenali
            return abort(404);
        }
        return redirect('/result')->with('success', 'Top-up berhasil!');
    }

    public function submitForm(Request $request) {
        // Logika pemrosesan formulir disini

        // Redirect ke home.blade.php
        return redirect('/result')->with('success', 'Formulir berhasil disubmit!');
    }

    // public function showHome() {
    //     return view('topup.result');
    // }

    public function showResult() {
        return view('topup.result');
    }
}