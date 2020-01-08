<?php

use Illuminate\Database\Seeder;

class Lovefood extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Lovefood')  -> insert ([
        	'name' => str_random(200),
        	'qualtity' => integer,
        	'soldout' => boolean,
        	'price' => integer 
        ])
    }
}
