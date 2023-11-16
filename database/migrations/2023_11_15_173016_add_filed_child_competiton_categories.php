<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFiledChildCompetitonCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('competiton_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('child')->nullable();
            $table->foreign('child')->references('id')->on('competiton_categories')->onDelete('cascade');
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
            $table->dropForeign('child');
            $table->dropColumn('child');
        });
    }
}
