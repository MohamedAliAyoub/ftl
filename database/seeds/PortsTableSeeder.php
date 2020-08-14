<?php

use Illuminate\Database\Seeder;

class PortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

          \App\Port::query()->insert([
            ['title' => 'بورسعيد', 'country_id' => 1],
            ['title' => 'دمياط', 'country_id' => 1],
            ['title' => 'الإسكندرية', 'country_id' => 1],

            ['title' => 'الرياض', 'country_id' => 2],
            ['title' => 'الدمام', 'country_id' => 2],
            ['title' => 'جدة', 'country_id' => 2],

            ['title' => 'دبي', 'country_id' => 3],
            ['title' => 'أبو ظبي', 'country_id' => 3],
        ]);

    }//end of run

}//end of seeder
