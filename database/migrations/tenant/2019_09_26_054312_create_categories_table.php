<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
//            $table->uuid('id')->primary();
            $table->string('name');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE `categories` ADD `id` BINARY(16) FIRST');
        DB::statement('ALTER TABLE `categories` ADD PRIMARY KEY (`id`)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
