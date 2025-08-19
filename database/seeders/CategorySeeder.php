<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Men', 'slug' => 'men'],
            ['id' => 2, 'name' => 'Women', 'slug' => 'women'],
            ['id' => 3, 'name' => 'Kids', 'slug' => 'kids'],
        ]);
    }
}
