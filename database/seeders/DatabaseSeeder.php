<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Customer;
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
        User::create([
            'username' => 'nica_admin',
            'full_name' => 'Nica Administrator',
            'email' => 'nica.admin@example.com',
            'password' => bcrypt('password'),
        ]);

        Customer::insert([
            ['full_name' => 'Ace Studio', 'email' => 'ace@studio.example', 'phone' => '09171234567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Mono House', 'email' => 'mono@house.example', 'phone' => '09181234567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Nica Records', 'email' => 'records@nica.example', 'phone' => '09191234567', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
