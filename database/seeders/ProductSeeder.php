<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        // Creazione di dati casuali per la tabella prodotti
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name' => fake()->sentence(3),
                'price' => fake()->randomFloat(2, 10, 100),
                'description' => fake()->paragraph(2),
                'img' => fake()->imageUrl(640, 480),
                'user_id' => rand(1, 5)
            ]);
        }
    }
}
