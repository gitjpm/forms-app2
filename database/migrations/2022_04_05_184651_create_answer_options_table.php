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
        Schema::create('answer_options', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('answer_text_id');
            $table->foreign('answer_text_id')->references('id')->on('answer_texts');
            $table->unsignedBigInteger('options_set_id');
            $table->foreign('options_set_id')->references('id')->on('options_sets');
            $table->integer('order')->default(0);
            $table->integer('weight')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_options');
    }
};
