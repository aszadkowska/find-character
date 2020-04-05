<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('height');
            $table->string('mass');
            $table->string('hairColor');
            $table->string('skinColor');
            $table->string('eyeColor');
            $table->string('birthYear');
            $table->string('gender');
            $table->string('homeworld');
            $table->json('films')->nullable();
            $table->json('species')->nullable();
            $table->json('vehicles')->nullable();
            $table->json('starships')->nullable();
            $table->timestamp('created')->nullable();
            $table->timestamp('edited')->nullable();
            $table->string('url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
