<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
           // $table->foreignId('user_id');
            $table->string('title');
            $table->integer('category_id')->nullable();
            $table->integer('amount')->default(1);
            $table->string('description')->nullable();
            $table->unsignedInteger('price')->nullable();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->string('tags')->nullable();
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
        Schema::dropIfExists('posts');
    }
};
