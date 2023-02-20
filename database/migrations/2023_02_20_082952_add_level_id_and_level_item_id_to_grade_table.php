<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('grade', function (Blueprint $table) {
            $table->unsignedBigInteger('level_id')
                ->index()->nullable();

            $table->unsignedBigInteger('level_item_id')
                ->index()->nullable();

            $table->foreign('level_id')
                ->references('level_id')
                ->on('level_level_item');

            $table->foreign('level_item_id')
                ->references('level_item_id')
                ->on('level_level_item');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grade', function (Blueprint $table) {
            $table->dropForeign('grade_level_id_foreign');
            $table->dropColumn('level_id');
            $table->dropForeign('grade_level_item_id_foreign');
            $table->dropColumn('level_item_id');
        });
    }
};
