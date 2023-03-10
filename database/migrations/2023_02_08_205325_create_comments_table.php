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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); //short way of constraining
            $table->foreignId('post_id')->constrained()->cascadeOnDelete(); ;
            $table->text('body');
            $table->timestamps();
            
            // $table->foreign('post_id')->references('id')->on('post')->cascadeOnDelete(); long way of constraining
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
