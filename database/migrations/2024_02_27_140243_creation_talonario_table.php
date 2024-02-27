<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {   
        Schema::create('talonario', function (Blueprint $table) {
            $table->increments('id_talonario');
            $table->integer('id_solicitud')->unsigned();
            $table->foreign('id_solicitud')->references('id_solicitud')->on('solicitud')->onDelete('cascade');
            $table->integer('id_sujeto')->unsigned();
            $table->foreign('id_sujeto')->references('id_sujeto')->on('sujeto_pasivo')->onDelete('cascade');
            $table->enum('tipo_talonario',['25','50']);
            $table->string('desde_nro');
            $table->string('hasta_nro');
            $table->date('fecha_emision');
            $table->date('fecha_recibido');
            $table->date('fecha_retiro');
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
