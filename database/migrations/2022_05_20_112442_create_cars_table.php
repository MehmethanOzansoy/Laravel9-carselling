<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('title');
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('price')->nullable();
            $table->string('brand')->nullable();
            $table->string('modal')->nullable();
            $table->integer('year')->nullable();
            $table->string('fuel')->nullable();
            $table->string('gear')->nullable();
            $table->string('KM')->nullable();
            $table->text('detail')->nullable();
            $table->string('motor_power')->nullable();
            $table->string('status',6);
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
        Schema::dropIfExists('cars');
    }
};
