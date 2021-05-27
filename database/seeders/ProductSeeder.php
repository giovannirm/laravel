<?php

namespace Database\Seeders;

use App\Models\Product;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(50)->create();

        /* $product = new Product();

        $product->name = 'Inka Kola 500ml';
        $product->price = 2.5;
        $product->category = 'Gaseosa';

        $product->save(); */
    }
}
