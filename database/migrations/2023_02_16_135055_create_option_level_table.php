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
        Schema::create('option_level', function (Blueprint $table) {
            $table->unsignedBigInteger('option_id');
            $table->unsignedBigInteger('level_id');

            $table->foreign('option_id')
                ->references('id')
                ->on('option')
                ->onDelete('cascade');

            $table->foreign('level_id')
                ->references('id')
                ->on('level')
                ->onDelete('cascade');

            $table->primary(['option_id', 'level_id']);
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
        Schema::dropIfExists('option_level');
    }
};
