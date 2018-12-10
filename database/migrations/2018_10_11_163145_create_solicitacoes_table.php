<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->string('local');
            $table->integer('qtdd_passageiros');
            $table->integer('user_requerente');
            $table->string('veiculo')->nullable();
            $table->integer('motorista')->nullable();
            $table->string('situacao')->default("Em andamento");
            $table->foreign('user_requerente')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('veiculo')->references('id')->on('veiculos')->onDelete('cascade');
            $table->foreign('motorista')->references('matricula')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitacoes');
    }
}
