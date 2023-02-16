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
        Schema::create('level_level_item', function (Blueprint $table) {
            $table->unsignedBigInteger('level_id');
            $table->unsignedBigInteger('level_item_id');

            $table->foreign('level_id')
                ->references('id')
                ->on('level')
                ->onDelete('cascade');

            $table->foreign('level_item_id')
                ->references('id')
                ->on('level_item')
                ->onDelete('cascade');

            $table->primary(['level_id', 'level_item_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('level_level_item');
    }
};
