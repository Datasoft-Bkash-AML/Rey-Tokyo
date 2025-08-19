<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get category IDs
        $menId = DB::table('categories')->where('slug', 'men')->value('id');
        $womenId = DB::table('categories')->where('slug', 'women')->value('id');
        $kidsId = DB::table('categories')->where('slug', 'kids')->value('id');

        DB::table('products')->insert([
            [
                'name' => 'Tokyo Denim Jacket',
                'slug' => 'tokyo-denim-jacket',
                'description' => 'Trendy denim jacket for men.',
                'category_id' => $menId,
                'price' => 89.99,
                'currency' => 'USD',
                'is_featured' => true,
                'is_new' => true,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sakura Floral Dress',
                'slug' => 'sakura-floral-dress',
                'description' => 'Elegant floral dress for women.',
                'category_id' => $womenId,
                'price' => 129.99,
                'currency' => 'USD',
                'is_featured' => true,
                'is_new' => true,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kids Rainbow Hoodie',
                'slug' => 'kids-rainbow-hoodie',
                'description' => 'Colorful hoodie for kids.',
                'category_id' => $kidsId,
                'price' => 49.99,
                'currency' => 'USD',
                'is_featured' => false,
                'is_new' => true,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
