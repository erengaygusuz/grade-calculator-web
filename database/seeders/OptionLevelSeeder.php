<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('option_level')->insert([
            [
                "option_id" => 1,
                "level_id" => 1,
            ],
            [
                "option_id" => 1,
                "level_id" => 2,
            ],
            [
                "option_id" => 2,
                "level_id" => 1,
            ],
            [
                "option_id" => 2,
                "level_id" => 2,
            ],
            [
                "option_id" => 2,
                "level_id" => 3,
            ],
            [
                "option_id" => 3,
                "level_id" => 1,
            ],
            [
                "option_id" => 3,
                "level_id" => 2,
            ],
            [
                "option_id" => 3,
                "level_id" => 3,
            ],
            [
                "option_id" => 3,
                "level_id" => 4,
            ],
            [
                "option_id" => 4,
                "level_id" => 2,
            ],
            [
                "option_id" => 4,
                "level_id" => 3,
            ],
            [
                "option_id" => 4,
                "level_id" => 4,
            ],
            [
                "option_id" => 4,
                "level_id" => 5,
            ],
            [
                "option_id" => 5,
                "level_id" => 1,
            ],
            [
                "option_id" => 5,
                "level_id" => 2,
            ],
            [
                "option_id" => 5,
                "level_id" => 3,
            ],
            [
                "option_id" => 5,
                "level_id" => 4,
            ],
            [
                "option_id" => 5,
                "level_id" => 5,
            ]
        ]);
    }
}
