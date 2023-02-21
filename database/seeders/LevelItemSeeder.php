<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('level_item')->insert([
            [
                "name" => "Quiz",
                "defaultPercentage" => 15,
                "currentPercentage" => 15
            ],
            [
                "name" => "Midterm",
                "defaultPercentage" => 35,
                "currentPercentage" => 35
            ],
            [
                "name" => "Writing",
                "defaultPercentage" => 10,
                "currentPercentage" => 10
            ],
            [
                "name" => "Speaking",
                "defaultPercentage" => 35,
                "currentPercentage" => 35
            ],
            [
                "name" => "Homework",
                "defaultPercentage" => 5,
                "currentPercentage" => 5
            ]
        ]);
    }
}
