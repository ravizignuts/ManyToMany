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
        Schema::create('book__writers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('writer_id');
            $table->foreign('writer_id')->references('id')->on('writers');
            //Second Method
            //$table->foreignId('writer_id')->constrained('writers','id');
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books');
            //Second Method
            //$table->foreignId('book_id')->constrained('books','id');
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
        Schema::dropIfExists('book__writers');
    }
};
