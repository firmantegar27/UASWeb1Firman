<?php

// GameController.php
namespace App\Http\Controllers;

use App\Models\GameAll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameAllController extends Controller
{
    public function index()
    {
        $gamesAll = GameAll::all();
        return view('home', compact('gamesAll'));
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        
        // $games = GameAll::where('title', 'like', '%' . $query . '%')
        //               ->orWhere('title', 'like', '%' . $query . '%')
        //               ->orWhere('title', 'like', $query . '%')
        //               ->orWhere('title', 'like', '%' . $query)
        //               ->orWhere('initial', 'like', $query)
        //               ->get();

        // $games = GameAll::where('title', 'ILIKE', '%' . $query . '%')->get();

        // $games = GameAll::where(DB::raw('LOWER(title)'), 'like', '%' . strtolower($query) . '%')->get();

        // 
        
        $games = GameAll::where(function($queryBuilder) use ($query) {
            // Pencarian berdasarkan huruf pertama
            $queryBuilder->orWhere(DB::raw('LOWER(LEFT(title, 1))'), strtolower($query));

            // Pencarian berdasarkan title secara lengkap
            $queryBuilder->orWhere(DB::raw('LOWER(title)'), 'like', '%' . strtolower($query) . '%');
        })->get();

        return view('search-results', compact('games'));
    }
    
}

