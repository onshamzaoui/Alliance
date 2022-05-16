<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVerificationFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instructor', function (Blueprint $table) {
            $table->integer('verified')->default(0);
        });
        Schema::table('admin', function (Blueprint $table) {
            $table->integer('verified')->default(0);
        });
        Schema::table('student', function (Blueprint $table) {
            $table->integer('verified')->default(0);
        });
        Schema::table('agent', function (Blueprint $table) {
            $table->integer('verified')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agent', function (Blueprint $table) {
            if (Schema::hasColumn('agent', 'verified')) {
                $table->dropColumn('verified');
            }
        });
        Schema::table('student', function (Blueprint $table) {
            if (Schema::hasColumn('student', 'verified')) {
                $table->dropColumn('verified');
            }
        });
        Schema::table('instructor', function (Blueprint $table) {
            if (Schema::hasColumn('instructor', 'verified')) {
                $table->dropColumn('verified');
            }
        });
        Schema::table('admin', function (Blueprint $table) {
            if (Schema::hasColumn('admin', 'verified')) {
                $table->dropColumn('verified');
            }
        });
        
    }
}
