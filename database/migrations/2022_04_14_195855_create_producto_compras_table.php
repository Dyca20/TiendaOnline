<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_compras', function (Blueprint $table) {

            $table->increments('id_Carrito_Producto');

            $table->integer('id_Carrito')->unsigned();
            $table->foreign('id_Carrito')->references('id_Carrito')->on('carrito_de_compras');

            $table->integer('id_producto')->unsigned();
            $table->foreign('id_producto')->references('id_producto')->on('productos');

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
        Schema::dropIfExists('producto_compras');
    }
}
