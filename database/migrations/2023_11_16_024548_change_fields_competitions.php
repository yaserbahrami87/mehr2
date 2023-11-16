<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFieldsCompetitions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('competitons', function (Blueprint $table) {
            $table->renameColumn('name_place','image2');
            $table->renameColumn('location','image3');
            $table->string('image4',200)->nullable();
            $table->string('image5',200)->nullable();
            $table->string('image6',200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('competitons', function (Blueprint $table) {
            $table->renameColumn('image2','name_place');
            $table->renameColumn('image3','location');
            $table->dropColumn('image4');
            $table->dropColumn('image5');
            $table->dropColumn('image6');
            $table->unsignedBigInteger('material_id')->nullable();
            $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade');
        });
    }
}
