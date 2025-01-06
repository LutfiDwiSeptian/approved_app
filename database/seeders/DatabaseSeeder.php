<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin Marika',
            'email' => "admin@mail.com",
            'role' => 'admin',
            'password' => bcrypt('12345'),

        ]);
        User::create([
            'name' => 'Direktur Radagon',
            'email' => "direktur@mail.com",
            'role' => 'direktur',
            'password' => bcrypt('12345'),

        ]);
        User::create([
            'name' => 'manager Ranni',
            'email' => "manager@mail.com",
            'role' => 'manager',
            'password' => bcrypt('12345'),

        ]);
        User::create([
            'name' => 'Karyawan',
            'email' => "karyawan@mail.com",
            'role' => 'karyawan',
            'password' => bcrypt('12345'),

        ]);
    }
}
