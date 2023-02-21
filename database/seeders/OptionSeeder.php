<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('option')->insert([
            [
                "name" => "Seçenek 1"
            ],
            [
                "name" => "Seçenek 2"
            ],
            [
                "name" => "Seçenek 3"
            ],
            [
                "name" => "Seçenek 4"
            ],
            [
                "name" => "Seçenek 5"
            ]
        ]);
    }
}
