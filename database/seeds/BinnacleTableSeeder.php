<?php

use Illuminate\Database\Seeder;

class BinnacleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('binnacles')->insert([
        'id' => '1',
        'weight' => '234',
        'imc' => '123',
        'anxiety' => 'si',
        'exercise' => 'si',
        'digestion' => 'lenta',
        'liquids' => 'agua',
        'size_t2' => '123',
        'desired_weight' => '40',
        'mg_normal' => '324',
        'kg_km' => '23',
        'projection_treatment' => '123',
        'se' => '123',
        'tri' => '3',
        'bi' => '2',
        'si' => '3',
        'total' => '123',
        'mg' => '213',
        'waist' => '123',
        'hip' => '123',
        'thigh' => '123',
        'braq' => '123',
        'wrist' => '123'
      ]);

      DB::table('binnacles')->insert([
        'id' => '2',
        'weight' => '456',
        'imc' => '546',
        'anxiety' => 'no',
        'exercise' => 'no',
        'digestion' => 'rapida',
        'liquids' => 'jugo',
        'size_t2' => '123',
        'desired_weight' => '123',
        'mg_normal' => '123',
        'kg_km' => '123',
        'projection_treatment' => '123',
        'se' => '123',
        'tri' => '1534',
        'bi' => '345',
        'si' => '534',
        'total' => '534',
        'mg' => '543',
        'waist' => '534',
        'hip' => '543',
        'thigh' => '534',
        'braq' => '534',
        'wrist' => '345'
      ]);

      DB::table('binnacles')->insert([
        'id' => '3',
        'weight' => '23789',
        'imc' => '789',
        'anxiety' => 'se',
        'exercise' => 'nu',
        'digestion' => 'media',
        'liquids' => 'vino',
        'size_t2' => '123',
        'desired_weight' => '67',
        'mg_normal' => '678',
        'kg_km' => '867',
        'projection_treatment' => '678',
        'se' => '678',
        'tri' => '678',
        'bi' => '678',
        'si' => '678',
        'total' => '678',
        'mg' => '67',
        'waist' => '8',
        'hip' => '8',
        'thigh' => '8',
        'braq' => '9',
        'wrist' => '678'
      ]);
    }

}
