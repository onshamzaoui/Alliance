<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddModificiationsToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('program', function (Blueprint $table) {
            $table->text("description")->change();
            $table->float("percentege");
            $table->string("image");

        });
        Schema::table('instructor', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
        Schema::table('admin', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
        Schema::table('student', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
        Schema::table('agent', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tables', function (Blueprint $table) {
            //
        });
    }
}
