<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('username','24')->after('name')->unique()->nullable();

            $table->enum('type',['user','Admin'])->after('remember_token')->default('user');
            $table->enum('status',['active','inactive','blocked'])->after('type')->default('active');
            $table->integer('allPaymentsOnSite')->default(0);


        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('username');
            $table->dropColumn('type');
            $table->dropColumn('status');

        });

    }
}
