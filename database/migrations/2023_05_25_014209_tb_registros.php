<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_registros', function (Blueprint $table) {
            $table->id();
            $table->integer('documento');
            $table->string('name');
            $table->string('last_name');
            $table->integer('carrera_id')
            ->foreign('carrera_id')
                  ->references('id')
                  ->on('tb_carreras')
                  ->onDelete('cascade');
            $table->integer('number');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_registros');
    }
};
