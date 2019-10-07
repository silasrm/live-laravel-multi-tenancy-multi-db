<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
//            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('database')->unique();
            $table->string('prefix')->unique();
            $table->timestamps();
        });

        DB::statement('ALTER TABLE `companies` ADD `id` BINARY(16) FIRST');
        DB::statement('ALTER TABLE `companies` ADD PRIMARY KEY (`id`)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
