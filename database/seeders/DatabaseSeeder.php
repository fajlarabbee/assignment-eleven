<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
            Product::factory(100)->create();
            $products = Product::all();


            foreach($products as $product) {
                $quantity = fake()->numberBetween(1, 200);
                $unit_price = $product->price;
                Sale::factory()->create([
                    'product_id' => $product->id,
                    'unit_price' => $unit_price,
                    'quantity' => $quantity,
                    'subtotal' => ($unit_price * $quantity),
                    'created_at' => fake()->dateTimeBetween('-2 months'),
                ]);
            }
    }
}
