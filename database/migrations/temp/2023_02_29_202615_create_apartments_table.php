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
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('number', 20);
            $table->float('square_footage',6,2);
            $table->smallInteger('storey');
            $table->smallInteger('rooms');
            $table->float('price',12,2);
            $table->text('card')->nullable();
            $table->text('rotatingmodel')->nullable();
            $table->text('virtualwalk')->nullable();
            $table->longText('description1')->nullable();
            $table->longText('description2')->nullable();
            $table->longText('description3')->nullable();
            $table->foreignId('status_id')->references('id')->on('status');
            $table->foreignId('offertypes_id')->references('id')->on('offertypes');
            $table->foreignId('buildings_id')->references('id')->on('buildings');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};
