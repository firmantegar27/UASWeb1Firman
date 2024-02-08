<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Game;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([

            // tambahkan seeder lain jika ada
        ]);

        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'email' => 'test@example.com',
            'password' => '123',
        ]);
        
        // Game::create([
        //     'dev'=>'HoYoverse',
        //     'title' => 'Genshin Impact',
        //     'slug' => 'genshin-impact',
        // ]);

        
    }
}
