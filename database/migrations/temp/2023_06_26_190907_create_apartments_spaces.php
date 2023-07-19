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
        Schema::create('apartments_spaces', function (Blueprint $table) {
            $table->id();
            $table->string('name',200);
            $table->smallInteger('type');
            $table->float('square_footage',6,2);
            $table->foreignId('apartments_id')->references('id')->on('apartments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments_spaces');
    }
};
