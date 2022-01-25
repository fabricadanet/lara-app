<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyIntentionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_intentions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->enum('status', ['active', 'inactive','sale_order'])->default('active');
            $table->enum('marital status', ['Solteiro', 'Casado', 'Divorciado', 'Viúvo', 'Outro'])->default('Casado')->nullable();
            $table->enum('children', ['Não', '01', '02', '03', '4 ou mais'])->default('Não')->nullable();
            $table->enum('pets', ['Não', 'Sim'])->default('Não')->nullable();
            $table->enum('suite', ['Não', '01', '02', '03', '4 ou mais'])->default('Não')->nullable();
            $table->enum('decision maker', ['Marido', 'Esposa', 'Companeiro(a)', 'Casal', 'Família'])->default('Família')->nullable();
            $table->enum('location', ['Centros Urbanos', 'Área Comercial', 'Acesso Rodovia', 'Área Rural', 'Condomínio', 'Outros'])->default('Centros Urbanos')->nullable();
            $table->enum('sale_deadline', ['Urgente', 'Durante o ano', 'Sem previsão'])->default('Urgente')->nullable();
            $table->enum('financing', ['Financiado', 'Financiar', 'vista', 'Outro'])->default('Financiar')->nullable();
            $table->enum('construction', ['Novo', 'Usado', 'Lançamento 01 ano', 'Lançcamento 02 anos', 'lançamento 03 anos ou mais'])->default('Novo')->nullable();
            $table->enum('property_type', ['Casa', 'Apartamento', 'Cobertura', 'Terreno', 'Chacará', 'Sobrado', 'Flat', 'Kitnet', 'Comercial', 'Loft', 'Industrial', 'Outros'])->default('Casa')->nullable();
            $table->enum('swap_type', ['Não', 'Carro', 'Imóvel', 'Terreno', 'Outro'])->default('Não')->nullable();
            $table->enum('sale_type', ['Compra', 'Aluguel', 'Permuta'])->default('Compra')->nullable();
            $table->enum('furniture', ['Não', 'Sim'])->default('Não')->nullable();
            $table->enum('parking', ['Não', 'Sim'])->default('Não')->nullable();
            $table->enum('fumante', ['Não', 'Sim'])->default('Não')->nullable();
            $table->enum('work_out', ['Não', 'Marido', 'Esposa', 'Companheiro(a)', 'Ambos'])->default('Não')->nullable();
            $table->enum('job_type', ['Não', 'Comercial', 'Industrial', 'Outros'])->default('Não')->nullable();
            $table->enum('proximity_beach', ['Não', 'Orla com vista', 'Orla sem vista', 'Quadra com vista', 'Quadra sem vista', 'Outro'])->default('Não')->nullable();
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
        Schema::dropIfExists('buy_intentions');
    }
}