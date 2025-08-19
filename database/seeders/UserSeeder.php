<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::truncate();
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@rey-tokyo.com',
            'password' => Hash::make('admin1234'),
            'is_admin' => true,
        ]);
        User::create([
            'name' => 'Customer User',
            'email' => 'customer@rey-tokyo.com',
            'password' => Hash::make('customer1234'),
            'is_admin' => false,
        ]);
    }
}
