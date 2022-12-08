<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Вторичные ключи связывающие сущности специализация-доктор и должность-доктор
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctors', function (Blueprint $table) {
            //Вторичные ключи, для id из таблиц "specializations" и "posts"
            $table->foreignId('specialization_id')->references('id')->on('specializations');
            $table->foreignId('post_id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctors', function (Blueprint $table) {
            //
        });
    }
};
