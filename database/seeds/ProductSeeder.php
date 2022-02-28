<?php

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
        DB::table('products')->insert([
            'name_product'=>'alkohol',
            'price_product' => 100000,
            'category_id'=> 1,
        ]);
    }
}
