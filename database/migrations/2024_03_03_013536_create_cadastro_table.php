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
    Schema::create('cadastro', function (Blueprint $table) {
        $table->id();
        $table->string('numcontrato');
        $table->string('empresa');
        $table->string('processos');
        $table->date('homologacao');
        $table->date('ajudicacao');
        $table->string('executiva');
        $table->string('siggo');
        $table->integer('valor');
        $table->string('licitacao');
        $table->string('modalidade');
        $table->date('inivigencia');
        $table->date('fimvigencia');
        $table->date('iniexecucao');
        $table->date('fimexecucao');
        $table->unsignedBigInteger('auxsituacao'); // Corrigido para corresponder ao tipo de dado da coluna 'id' na tabela 'auxsituacao'
        $table->unsignedBigInteger('auxdiretoria');
        $table->unsignedBigInteger('auxstatus');
        $table->timestamps();

        $table->foreign('auxsituacao')->references('id')->on('auxsituacao');
        $table->foreign('auxdiretoria')->references('id')->on('auxdiretoria');
        $table->foreign('auxstatus')->references('id')->on('auxstatus');
    });
}

    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadastro');
    }
};
