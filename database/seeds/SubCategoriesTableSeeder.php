<?php

use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = ['cat one', 'cat two', 'cat three'];

        foreach ($categories as $category) {

            \App\SubCategory::create([
                'name' => $category,
                'category_id' => 1,
            ]);

        }//end of foreach

    }//end of run

}//end of seeder
