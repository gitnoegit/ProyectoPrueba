<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('producto', 100);
            $table->unsignedBigInteger('presentacion_id');
            $table->foreign('presentacion_id')->references('id')->on('presentaciones');
            $table->smallInteger('cantidad');
            $table->unsignedBigInteger('unidadMedida_id');
            $table->foreign('unidadMedida_id')->references('id')->on('unidadmedidas');
            $table->float('precio');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
