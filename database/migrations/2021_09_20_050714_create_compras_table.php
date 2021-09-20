<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->int('cantidad');
            $table->int('precio');
            $table->int('nro factura');

            $table->foreign('users_id')
            ->references('id')->on('users');

            $table->foreign('proveedors_id')
            ->references('id')->on('proveedors');

            $table->foreign('productos_id')
            ->references('id')->on('productos');

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
        Schema::dropIfExists('compras');
    }
}
