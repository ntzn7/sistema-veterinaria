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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id')->references('id')->on('clients') 
            ->onDelete('set null');


            $table->string('photo_path')->nullable();
            $table->string('name');
            $table->string('specie')->nullable(); //espécie
            $table->string('breed')->nullable(); //raca
            $table->string('color')->nullable(); //cor
            $table->decimal('height',12,3)->nullable(); //altura
            $table->decimal('weight',12,3)->nullable(); //peso
            $table->string('gender')->nullable(); //sexo
            $table->date('birth_date')->nullable(); //data de nascimento
            $table->string('father')->nullable(); //pai do animal
            $table->string('mother')->nullable(); //mae do animal
            $table->text('observations')->nullable(); //observacao
            $table->timestamps();
        });
    }  

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
