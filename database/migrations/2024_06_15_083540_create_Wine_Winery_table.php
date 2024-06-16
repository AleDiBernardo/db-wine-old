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
        Schema::disableForeignKeyConstraints();

        Schema::create('wine_winery', function (Blueprint $table) {
            $table->unsignedBigInteger('wine_id')->index();
            $table->foreign('wine_id')->references('id')->on('wines');
            $table->unsignedBigInteger('winery_id')->index();
            $table->foreign('winery_id')->references('id')->on('wineries');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wine_winery');
    }
};
