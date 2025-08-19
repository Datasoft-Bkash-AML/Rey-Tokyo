<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
	public function run(): void
	{
		Product::truncate();
		Product::insert([
			[
				'name' => 'Tokyo Denim Jacket',
				'slug' => 'tokyo-denim-jacket',
				'description' => 'Trendy denim jacket inspired by Tokyo street fashion.',
				'price' => 89.99,
				'image' => 'https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80',
				'category_id' => 1,
			],
			[
				'name' => 'Sakura Floral Dress',
				'slug' => 'sakura-floral-dress',
				'description' => 'Elegant floral dress for spring.',
				'price' => 129.99,
				'image' => 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=400&q=80',
				'category_id' => 2,
			],
			[
				'name' => 'Kids Rainbow Hoodie',
				'slug' => 'kids-rainbow-hoodie',
				'description' => 'Colorful hoodie for kids.',
				'price' => 49.99,
				'image' => 'https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?auto=format&fit=crop&w=400&q=80',
				'category_id' => 3,
			],
		]);
	}
}
