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
        Schema::create('service_cabin', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('id_service');
            $table->foreignId('id_cabin');
            $table->String('name', 40);

            $table->timestamps();
            
            $table->foreign('id_service')
                ->references('id_service')->on('services')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('id_cabin')
                ->references('id')->on('cabins')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_cabin');
    }
};
