<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelLevelItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('level_level_item')->insert([
            [
                "level_id" => 1,
                "level_item_id" => 1
            ],
            [
                "level_id" => 1,
                "level_item_id" => 2
            ],
            [
                "level_id" => 1,
                "level_item_id" => 3
            ],
            [
                "level_id" => 1,
                "level_item_id" => 4
            ],
            [
                "level_id" => 1,
                "level_item_id" => 5
            ],
            [
                "level_id" => 2,
                "level_item_id" => 1
            ],
            [
                "level_id" => 2,
                "level_item_id" => 2
            ],
            [
                "level_id" => 2,
                "level_item_id" => 3
            ],
            [
                "level_id" => 2,
                "level_item_id" => 4
            ],
            [
                "level_id" => 2,
                "level_item_id" => 5
            ],
            [
                "level_id" => 3,
                "level_item_id" => 1
            ],
            [
                "level_id" => 3,
                "level_item_id" => 2
            ],
            [
                "level_id" => 3,
                "level_item_id" => 3
            ],
            [
                "level_id" => 3,
                "level_item_id" => 4
            ],
            [
                "level_id" => 3,
                "level_item_id" => 5
            ],
            [
                "level_id" => 4,
                "level_item_id" => 1
            ],
            [
                "level_id" => 4,
                "level_item_id" => 2
            ],
            [
                "level_id" => 4,
                "level_item_id" => 3
            ],
            [
                "level_id" => 4,
                "level_item_id" => 4
            ],
            [
                "level_id" => 4,
                "level_item_id" => 5
            ],
            [
                "level_id" => 5,
                "level_item_id" => 1
            ],
            [
                "level_id" => 5,
                "level_item_id" => 2
            ],
            [
                "level_id" => 5,
                "level_item_id" => 3
            ],
            [
                "level_id" => 5,
                "level_item_id" => 4
            ],
            [
                "level_id" => 5,
                "level_item_id" => 5
            ]
        ]);
    }
}
