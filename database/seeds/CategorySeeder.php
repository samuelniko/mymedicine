<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'ANALGESIK NARKOTIK',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'ANALGESIK NON NARKOTIK',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'ANESTETIK LOKAL',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'ANTIALERGI dan OBAT untuk ANAFILAKSIS',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'ANTIEPILEPSI - ANTIKONVULSI',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'Antelmintik Intestinal',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'ANTIMIGREN',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'HORMON dan ANTIHORMON',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'OBAT untuk PROSEDUR PRE OPERATIF',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'ANTIDOT dan OBAT LAIN untuk KERACUNAN',
            'description' => ''
        ]);
    }
}
