<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('articles', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->text('body');
                $table->text('description');
                $table->dateTime('published_at')->nullable();
                $table->string('image')->nullable();
                $table->integer('views')->unsigned()->default(0);
                $table->unsignedBigInteger('author_id');
                $table->unsignedBigInteger('blog_category_id');
                $table->timestamps();
    
                $table->foreign('author_id')
                ->references('id')
                ->on('authors')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
                $table->foreign('blog_category_id')
                ->references('id')
                ->on('blog_categories')
                ->onDelete('CASCADE')
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
        Schema::dropIfExists('articles');
    }
}
