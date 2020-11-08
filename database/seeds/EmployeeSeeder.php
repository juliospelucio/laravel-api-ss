<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'name' => "Julio",
            'role' => "Desenvolvedor Backend",
            'email' => "julio@mail.com",
            'phone' => "5451584",
            'admission' => date('Y-m-d H:i:s'),
            'company_id' => '1'
        ]);
    }
}
