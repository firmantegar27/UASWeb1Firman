<?php

namespace Database\Seeders;

use App\Models\GamePC;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GamePcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GamePC::create([
            'dev' => 'EA Games',
            'title' => 'Apex Legend',
            'slug' => 'apex-legend',
            'image' => 'Icon-Apex.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GamePC::create([
            'dev' => 'Epic Games',
            'title' => 'Fortnite',
            'slug' => 'fortnite',
            'image' => 'FORTNITE-.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GamePC::create([
            'dev' => 'Riot Games',
            'title' => 'League of Legend',
            'slug' => 'LOL',
            'image' => 'Icon-LOL.webp'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GamePC::create([
            'dev' => 'Tencent',
            'title' => 'Goddes of Victory:nikke',
            'slug' => 'nikke',
            'image' => 'Icon-nikke.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GamePC::create([
            'dev' => 'Zeppeto',
            'title' => 'Point Blank',
            'slug' => 'PB',
            'image' => 'Icon-PB.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GamePC::create([
            'dev' => 'Tencent',
            'title' => 'PUBG',
            'slug' => 'pubg',
            'image' => 'Icon-PUBG.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GamePC::create([
            'dev' => 'Riot Games',
            'title' => 'Valorant',
            'slug' => 'valorant',
            'image' => 'Icon-VALORANT.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GamePC::create([
            'dev' => 'HoYoverse',
            'title' => 'Genshin Impact',
            'slug' => 'genshin-impact',
            'image' => 'Icon-Genshin.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);
    }
}
