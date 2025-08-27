<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert Subscribers
        DB::table('subscribers')->insert([
            [
                'name' => 'Ravi Sharma',
                'email' => 'ravi.sharma@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Priya Mehta',
                'email' => 'priya.mehta@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Amit Verma',
                'email' => 'amit.verma@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insert Online Shops
        DB::table('online_shops')->insert([
            [
                'name' => 'Amazon',
                'link' => 'https://www.amazon.in',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Flipkart',
                'link' => 'https://www.flipkart.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Myntra',
                'link' => 'https://www.myntra.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insert Product Categories
        DB::table('product_categories')->insert([
            ['name' => 'Electronics', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Clothing', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Books', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Insert Products
        DB::table('products')->insert([
            [
                'product_category_id' => 1, // Electronics
                'online_shop_id' => 1, // Amazon
                'name' => 'Wireless Headphones',
                'image' => 'headphones.jpg',
                'description' => 'High-quality Bluetooth wireless headphones with noise cancellation.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_category_id' => 2, // Clothing
                'online_shop_id' => 2, // Flipkart
                'name' => 'Men’s Casual Shirt',
                'image' => 'shirt.jpg',
                'description' => 'Cotton slim fit casual shirt for men.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_category_id' => 3, // Books
                'online_shop_id' => 3, // Myntra
                'name' => 'The Alchemist',
                'image' => 'alchemist.jpg',
                'description' => 'Famous motivational novel by Paulo Coelho.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insert Feedbacks
        DB::table('feed_backs')->insert([
            [
                'subscriber_id' => 1, // Ravi Sharma
                'name' => 'Ravi Sharma',
                'feedback_desc' => 'Really impressed with the quality of products!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subscriber_id' => 2, // Priya Mehta
                'name' => 'Priya Mehta',
                'feedback_desc' => 'Fast delivery and good customer service.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subscriber_id' => 3, // Amit Verma
                'name' => 'Amit Verma',
                'feedback_desc' => 'Wide variety of options, but prices could be better.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
