<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_transaction_details', function (Blueprint $table) {
            $table->increments('transaction_detail_id');
            $table->unsignedInteger('transaction_id');
            $table->unsignedInteger('products_id');
            $table->integer('quantily');
            $table->decimal('price', 10, 2);
            $table->decimal('total', 15,2);
            $table->timestamps();

            //foregin key
            $table->foreign('transaction_id')->references('transaction_id')->on('tbl_transactions')->onDelete('cascade');
            $table->foreign('products_id')->references('products_id')->on('tblproducts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_transaction_details');
    }
}
