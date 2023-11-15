<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFiledFestivalToCompetitionCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('competiton_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('festival_id')->nullable();
            $table->foreign('festival_id')->references('id')->on('festivals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('competiton_categories', function (Blueprint $table) {
            $table->dropForeign('festival_id');
            $table->dropColumn('festival_id');

        });
    }
}
