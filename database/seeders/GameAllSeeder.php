<?php

namespace Database\Seeders;

use App\Models\GameAll;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GameAllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GameAll::create([
            'dev' => 'HoYoverse',
            'title' => 'Genshin Impact',
            'slug' => 'genshin-impact',
            'image' => 'Icon-genshin.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameAll::create([
            'dev' => 'VNGGAMES',
            'title' => 'Metal Slug:Awakening',
            'slug' => 'metal-slug',
            'image' => 'Icon-MSA.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameAll::create([
            'dev' => 'Tencent',
            'title' => 'Brawl Star',
            'slug' => 'brawl-star',
            'image' => 'Icon-Brawl.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameAll::create([
            'dev' => 'Garena',
            'title' => 'Call of Duty Mobile',
            'slug' => 'codm',
            'image' => 'Icon-CODM.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameAll::create([
            'dev' => 'Garena',
            'title' => 'Free Fire',
            'slug' => 'free-fire',
            'image' => 'Icon-ff.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameAll::create([
            'dev' => 'Gravity Game Hub',
            'title' => 'Ragnarok Origin Global',
            'slug' => 'R-O-G',
            'image' => 'Icon-ROO.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameAll::create([
            'dev' => 'Tencent',
            'title' => 'Tower of Fantasy',
            'slug' => 'T-O-F',
            'image' => 'Icon-ToF.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameAll::create([
            'dev' => 'Garena',
            'title' => 'Arena of Valor',
            'slug' => 'AOV',
            'image' => 'Icon-AOV.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameAll::create([
            'dev' => 'EA Games',
            'title' => 'Apex Legend',
            'slug' => 'apex-legend',
            'image' => 'Icon-Apex.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameAll::create([
            'dev' => 'Epic Games',
            'title' => 'Fortnite',
            'slug' => 'fortnite',
            'image' => 'FORTNITE-.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameAll::create([
            'dev' => 'Riot Games',
            'title' => 'League of Legend',
            'slug' => 'LOL',
            'image' => 'Icon-LOL.webp'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameAll::create([
            'dev' => 'Tencent',
            'title' => 'Goddes of Victory:nikke',
            'slug' => 'nikke',
            'image' => 'Icon-nikke.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameAll::create([
            'dev' => 'Zeppeto',
            'title' => 'Point Blank',
            'slug' => 'PB',
            'image' => 'Icon-PB.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameAll::create([
            'dev' => 'Tencent',
            'title' => 'PUBG',
            'slug' => 'pubg',
            'image' => 'Icon-PUBG.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameAll::create([
            'dev' => 'Riot Games',
            'title' => 'Valorant',
            'slug' => 'valorant',
            'image' => 'Icon-VALORANT.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);
    }
}
