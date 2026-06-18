<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         User::factory(10)->create();

        User::firstOrCreate(
            ['email' => 'sjoerd@gmail.com'],

            ['name' => 'Sjoerd',
            'email_verified_at' => now(),
            'password' => 'test',
            'remember_token' => null,
            'baby_name' => 'Evita',
            'birthday' => '2026-05-19',
        ]);

        $this->call([EventSeeder::class]);
    }
}
