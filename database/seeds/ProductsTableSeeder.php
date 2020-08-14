<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = ['pro one', 'pro two'];

        foreach ($products as $product) {

            \App\Product::create([
                'sub_category_id' => 1,
                'name' => $product,
                'description' => $product ,
                'price' => 100,
                'stock' => 100,
            ]);

        }//end of foreach

    }//end of run

}//end of seeder
