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
        Schema::create('tbl_producto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cod_producto');
            $table->string('nombre_producto', 100);
            $table->string('detalle_producto', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_producto');
   
    }
}
