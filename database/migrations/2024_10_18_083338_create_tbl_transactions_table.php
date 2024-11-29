<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_transactions', function (Blueprint $table) {
            $table->increments('transaction_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('customer_id')->nullable();
            $table->decimal('total_amount', 10, 2);
            $table->decimal('discount', 5, 2)->default(0);
            $table->string('status');
            $table->timestamps();

            //foreign key
            $table->foreign('user_id')->references('user_id')->on('tblusers')->onDelete('cascade');
            $table->foreign('customer_id')->references('customer_id')->on('tbl_customer')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_transactions');
    }
}
