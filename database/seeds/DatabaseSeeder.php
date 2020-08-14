<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(SubCategoriesTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        
        $this->call(PortsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);


            \App\User::query()->insert([
            ['name' => 'mohamed','password'=>\Hash::make(123456) , 'email'=>'mohamedali163163@gmail.com'],
           
        ]);
    }
}
