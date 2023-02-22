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
                "name" => "Option 1"
            ],
            [
                "name" => "Option 2"
            ],
            [
                "name" => "Option 3"
            ],
            [
                "name" => "Option 4"
            ],
            [
                "name" => "Option 5"
            ]
        ]);
    }
}
