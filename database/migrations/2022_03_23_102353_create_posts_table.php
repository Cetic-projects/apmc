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
            $table->string('description')->nullable();
            $table->unsignedInteger('price')->nullable();
            $table->boolean('is_featured')->nullable();
            $table->boolean('is_negociable')->nullable();
            $table->unsignedInteger('export_price')->nullable();
            $table->unsignedInteger('promotional_price')->nullable();
            $table->dateTime('begin_promotional_date')->nullable();
            $table->dateTime('end_promotional_date')->nullable();
            $table->string('slug')->nullable();
            $table->integer('nb_stars')->nullable();
            $table->string('video_url')->nullable();
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
