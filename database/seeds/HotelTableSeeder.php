<?php

use Illuminate\Database\Seeder;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
        	['name' => 'Hotel_Anpha', 'address' => 'Hanoi', 'phone' => '0966789898'], 
        	['name' => 'Hotel_Anpha', 'address' => 'DaNang', 'phone' => '0966789897'],
        	['name' => 'Hotel_Anpha', 'address' => 'tp.HCM', 'phone' => '0966789896'],
        ]);
    }
}
