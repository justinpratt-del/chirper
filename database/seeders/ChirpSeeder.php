<?php

namespace Database\Seeders;

use App\Models\Chirp;
use App\Models\User;
use Illuminate\Database\Seeder;

class ChirpSeeder extends Seeder
{
    public function run(): void
    {
        $messages = [
            'Just setting up my Chirper!',
            'Laravel is amazing for building web apps.',
            'Hello from Chirper! 🐦',
            'Learning Laravel one lesson at a time.',
            'Building in public is the way to go!',
        ];

        if (User::count() < 3) {
            User::create([
                'name' => 'Justin Pratt',
                'email' => 'justin@chirper.com',
                'password' => bcrypt('password'),
            ]);

            User::create([
                'name' => 'Laravel Fan',
                'email' => 'fan@chirper.com',
                'password' => bcrypt('password'),
            ]);
        }

        $users = User::all();

        foreach ($users as $user) {
            Chirp::create([
                'user_id' => $user->id,
                'message' => $messages[array_rand($messages)],
            ]);
        }
    }
}
