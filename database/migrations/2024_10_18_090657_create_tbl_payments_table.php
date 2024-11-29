<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_payments', function (Blueprint $table) {
            $table->increments('payment_id');
            $table->unsignedInteger('transaction_id');
            $table->unsignedInteger('user_id');
            $table->decimal('amount', 10, 2);
            $table->decimal('change',15,2)->nullable();
            $table->string('payment_method');
            $table->date('payment_date');
            $table->timestamps();

            //foreign key
            $table->foreign('transaction_id')->references('transaction_id')->on('tbl_transactions')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('tblusers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_payments');
    }
}
