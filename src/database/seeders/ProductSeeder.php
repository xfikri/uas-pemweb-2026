<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Arabica Gayo',
            'description' => 'Kopi Arabica khas Aceh dengan aroma floral.',
            'price' => 35000,
            'is_available' => true,
        ]);
    }
}

