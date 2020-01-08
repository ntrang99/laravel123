<?php

use Illuminate\Database\Seeder;

class SeederFood extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table ('Food')->insert([
        	'name' => str_random(200),
        	'qualtity' => integer,
        	'soldout' => boolean
        ])
    }
}
