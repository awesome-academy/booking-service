<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	['name' => 'phongcodien', 'hotel_id' => '217'],
        	['name' => 'phonghiendai', 'hotel_id' => '217'],
        	['name' => 'phongvip', 'hotel_id' => '217'], 
        ]);
    }
}
