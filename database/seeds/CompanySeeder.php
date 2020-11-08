<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => "SimSave",
            'cnpj' => Str::random(10),
            'address' => "Rua XXXXX, XXXX - XXXXXX - Belo Horizonte / MG"
        ]);
        DB::table('companies')->insert([
            'name' => "DevComp",
            'cnpj' => Str::random(10),
            'address' => "Rua XXXXX, XXXX - XXXXXX - São Paulo / SP"
        ]);
        DB::table('companies')->insert([
            'name' => "Fantasy",
            'cnpj' => Str::random(10),
            'address' => "Rua XXXXX, XXXX - XXXXXX - Rio de Janeiro / RJ"
        ]);
    }
}
