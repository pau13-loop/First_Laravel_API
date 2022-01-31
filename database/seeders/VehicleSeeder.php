<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicles = [
            [
                "brand"=>"DeLorean",
                "model"=>"Motor Company",
                "category_name"=>"classic",
                "year"=>1983,
                "price"=>45,
                "original_price"=>45
            ],
            [
                "brand"=>"Herbie Torero",
                "model"=>"Volkswagen",
                "category_name"=>"common",
                "year"=>1980,
                "price"=>35,
                "original_price"=>35
            ],
            [
                "brand"=>"Batmobile",
                "model"=>"Lincoln Futura",
                "category_name"=>"premium",
                "year"=>1943,
                "price"=>75,
                "original_price"=>75
            ]
        ];



        DB::table('vehicles')->insert($vehicles);

        //! No me funciona el path, no encuentra el archivo
        // DB::unprepared((file_get_contents('..\\scripts\\vehicles.sql')));
    }
}
