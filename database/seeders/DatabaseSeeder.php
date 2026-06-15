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

        User::firstOrCreate ([
            'name' => 'Sjoerd',
            'email' => 'sjoerd@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('test'),
        ]);

        $this->call([EventSeeder::class]);
    }
}
