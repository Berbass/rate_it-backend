<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableRates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('rates');

        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('thing_id');
            $table->foreignId('scale_id');

            $table->foreign('thing_id')->references('id')->on('things');
            $table->foreign('scale_id')->references('id')->on('rate_scales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Uncomment if SGBD != SqLite
        // 
        // Schema::table('rates', function (Blueprint $table) {
        //     $table->dropForeign('rates_thing_id_foreign');
        //     $table->dropForeign('rates_scale_id_foreign');
        // });

        Schema::dropIfExists('rates');
    }
}
