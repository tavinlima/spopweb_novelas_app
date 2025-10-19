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
        Schema::create('novelas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->string('titulo',50);
            $table->string('descricao',100);
            $table->date('inicio_exibicao');
            $table->date('fim_exibicao');
            $table->decimal('topo_audiencia', total:10, places:2);
            $table->integer('qtd_capitulos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('novelas');
    }
};
