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
        Schema::create('book_migration', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('pages');
            $table->string('IBN');
            $table->string('category');
            $table->string('publisher');
            $table->string('yearOfPublication');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign ('user_id')->references('id')->on('users')->onDelete('cascade');

        }
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_migration');
    }
};
