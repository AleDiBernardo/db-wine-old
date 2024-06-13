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
        Schema::create('wines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id');
            // $table->foreignId('type_id')->constrained('types');
            // $table->integer('type_id');
            $table->string('wine');
            $table->float('average')->nullable();
            $table->integer('review')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->foreign('type_id')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wines');
    }
};