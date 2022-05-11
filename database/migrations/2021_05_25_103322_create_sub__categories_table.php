<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub__categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('status',['Active','InActive']);
            $table->string('image')->nullable();
            $table->unsignedBigInteger('min__category_id');
            $table->timestamps();

            $table->foreign('min__category_id')->references('id')->on('min__categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub__categories');
    }
}
