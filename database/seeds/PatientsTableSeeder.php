<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('patients')->insert([
          'binnacle_id' => '1',
          'name' => 'juan',
          'last_name' => 'toledo',
          'email' => 'juan@gmail.com',
          'run' => '11111111-1',
          'address' => 'candelarias',
          'prevision' => 'no se',
          'job' => 'entrnador',
          'phone' => '123123',
          'age' => '100',
          'size' => '27',
          'acept_size' => '24',
          't2' => '28',
          'imc_25' => '50'
          // 'password' => bcrypt('123'),
      ]);
      DB::table('patients')->insert([
          'binnacle_id' => '2',
          'name' => 'pedro',
          'last_name' => 'saavedra',
          'email' => 'pedro@gmail.com',
          'run' => '22111111-1',
          'address' => 'pajatiros',
          'prevision' => 'no seee',
          'job' => 'saltarin',
          'phone' => '123123123',
          'age' => '123',
          'size' => '227',
          'acept_size' => '224',
          't2' => '288',
          'imc_25' => '550'
          // 'password' => bcrypt('123'),
      ]);
      DB::table('patients')->insert([
          'binnacle_id' => '3',
          'name' => 'roberto',
          'last_name' => 'mandarin',
          'email' => 'rob@gmail.com',
          'run' => '11121111-1',
          'address' => 'cocodrilos',
          'prevision' => 'noo se',
          'job' => 'boxeador',
          'phone' => '99999',
          'age' => '150',
          'size' => '222',
          'acept_size' => '2224',
          't2' => '1238',
          'imc_25' => '520'
          // 'password' => bcrypt('123'),
      ]);
    }
}
