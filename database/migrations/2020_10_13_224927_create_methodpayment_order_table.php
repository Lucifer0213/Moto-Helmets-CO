<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMethodpaymentOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('methodpayment_order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('value');
            $table->integer('consignment_number')->nullable();
            $table->integer('method_payment_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->softDeletes();
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
        Schema::dropIfExists('methodpayment_order');
    }
}
