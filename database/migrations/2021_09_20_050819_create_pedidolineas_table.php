<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidolineasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidolineas', function (Blueprint $table) {
            $table->id();
            $table->date('f_pedido');

            $table->foreign('users_id')
            ->references('id')->on('users');

            $table->foreign('productos_id')
            ->references('id')->on('productos');

            $table->foreign('modopagos_id')
            ->references('id')->on('modopagos');

            $table->foreign('detallefacturas_id')
            ->references('id')->on('detallefacturas');

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
        Schema::dropIfExists('pedidolineas');
    }
}
