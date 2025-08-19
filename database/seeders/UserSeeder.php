<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@rey-tokyo.com',
                'password' => Hash::make('admin1234'),
                'is_admin' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Demo Customer',
                'email' => 'customer@rey-tokyo.com',
                'password' => Hash::make('customer1234'),
                'is_admin' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
