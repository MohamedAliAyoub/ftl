<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         \App\Country::query()->insert([
            ['title' => 'مصر'],
            ['title' => 'السعودية'],
            ['title' => 'الإمارات'],
        ]);

    }//end of run

}//end of seeder
