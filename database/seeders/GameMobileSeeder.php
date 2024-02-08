<?php

namespace Database\Seeders;

use App\Models\GameMobile;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GameMobileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GameMobile::create([
            'dev' => 'HoYoverse',
            'title' => 'Genshin Impact',
            'slug' => 'genshin-impact',
            'image' => 'Icon-genshin.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameMobile::create([
            'dev' => 'VNGGAMES',
            'title' => 'Metal Slug:Awakening',
            'slug' => 'metal-slug',
            'image' => 'Icon-MSA.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameMobile::create([
            'dev' => 'Tencent',
            'title' => 'Brawl Star',
            'slug' => 'brawl-star',
            'image' => 'Icon-Brawl.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameMobile::create([
            'dev' => 'Garena',
            'title' => 'Call of Duty Mobile',
            'slug' => 'codm',
            'image' => 'Icon-CODM.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameMobile::create([
            'dev' => 'Garena',
            'title' => 'Free Fire',
            'slug' => 'free-fire',
            'image' => 'Icon-ff.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameMobile::create([
            'dev' => 'Gravity Game Hub',
            'title' => 'Ragnarok Origin Global',
            'slug' => 'R-O-G',
            'image' => 'Icon-ROO.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameMobile::create([
            'dev' => 'Tencent',
            'title' => 'Tower of Fantasy',
            'slug' => 'T-O-F',
            'image' => 'Icon-ToF.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        GameMobile::create([
            'dev' => 'Garena',
            'title' => 'Arena of Valor',
            'slug' => 'AOV',
            'image' => 'Icon-AOV.jpg'
            // tambahkan kolom lain sesuai kebutuhan
        ]);
    }
}
