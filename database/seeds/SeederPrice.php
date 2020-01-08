<?php

use Illuminate\Database\Seeder;

class SeederPrice extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table ('Price')->insert([
        	'price' => integer
        ])
    }
}
