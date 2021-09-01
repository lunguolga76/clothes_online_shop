<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTagnewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_tagnew', function (Blueprint $table) {
            $table->unsignedBigInteger('article_id');
            $table->unsignedBigInteger('tagnew_id');

            $table->foreign('article_id')
            ->references('id')
            ->on('articles')
            ->onDeleta('CASCADE')
            ->onUpdate('CASCADE');
            $table->foreign('tagnew_id')
            ->references('id')
            ->on('tagnews')
            ->onDeleta('CASCADE')
            ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_tagnew');
    }
}
