<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldMaterialCompetitionChild extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('competitons', function (Blueprint $table) {
            $table->unsignedBigInteger('competiton_category_child')->nullable();
            $table->foreign('competiton_category_child')->references('id')->on('competiton_categories')->onDelete('cascade');
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
            $table->dropForeign('competiton_category_child');
            $table->dropColumn('competiton_category_child');
        });
    }
}
