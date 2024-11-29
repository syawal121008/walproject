<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblproducts', function (Blueprint $table) {
            $table->increments("products_id");
            $table->string("products_name",100);
            $table->text("product_description");
            $table->string("price",10);
            $table->integer("stock");
            $table->unsignedInteger("category_id");
            $table->timestamps();
            $table->foreign("category_id")->references("category_id")->on("tblcategories");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblproducts');
    }
}
