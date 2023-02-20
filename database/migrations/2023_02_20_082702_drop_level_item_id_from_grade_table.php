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
            $table->dropForeign('grade_level_item_id_foreign');
            $table->dropColumn('level_item_id');
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
            $table->unsignedBigInteger('level_item_id')
                ->index()->nullable();
            $table->foreign('level_item_id')
                ->references('id')
                ->on('level_level_item');
        });
    }
};
