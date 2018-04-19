<?php

use Illuminate\Database\Seeder;

class ComentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coments')->insert([
          'id' => '1',
          'body' => 'lorem ipsum'
        ]);
    }
}
