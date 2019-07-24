<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabla_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cod_producto')->unique()->unsigned();
            $table->string('nombre_producto');
            $table->string('detalle_producto');
            $table->float('precio_producto');
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
        Schema::dropIfExists('tabla_productos');
    }
}
