<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('customer_address_id');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

            $table->foreign('order_id')
            ->references('id')
            ->on('orders')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');

            $table->foreign('customer_address_id')
            ->references('id')
            ->on('customer_addresses')
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
        Schema::dropIfExists('shippings');
    }
}
