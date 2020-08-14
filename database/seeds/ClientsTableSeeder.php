<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = ['ahmed', 'mohamed'];

        foreach ($clients as $client) {

            \App\Client::create([
               'name' => $client,
               'phone' => '011111112',
               'address' => 'haram',
               'password'=>Hash::make(123456),
               'email'=>$client.'@yahoo.com'
            ]);

        }//end of foreach

    }//end of run

}//end of seeder
