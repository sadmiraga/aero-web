<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naziv');
            $table->integer('zaloga');
            $table->string('stevilkaNarocila')->nullable();
            $table->string('lokacija1');
            $table->string('lokacija2');
            $table->string('lokacija3');
            $table->string('kolicina');

            $table->unsignedInteger('ident_id')->unsigned();
            $table->foreign('ident_id')->references('id')->on('idents')->onDelete('cascade');

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
        Schema::dropIfExists('products');
    }
}
