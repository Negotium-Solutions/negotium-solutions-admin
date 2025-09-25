<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Negotium',
            'email' => 'admin@negotium-solutions.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'first_name' => 'KG',
            'last_name' => 'Badimo',
            'email' => 'kg@muluma.co.za',
            'password' => bcrypt('password'),
        ]);
    }
}
