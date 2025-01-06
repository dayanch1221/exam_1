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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedMediumInteger( column: 'season_id');
            $table->foreign( column: 'season_id')->references(columns: 'id')->on(table: 'seasons')->cascadeOnDelete();
            $table->unsignedMediumInteger( column: 'loscation_id');
            $table->foreign( column: 'location_id')->references(columns: 'id')->on(table: 'location')->cascadeOnDelete();
            $table->unsignedMediumInteger( column: 'course_id');
            $table->foreign( column: 'course_id')->references(columns: 'id')->on(table: 'course')->cascadeOnDelete();
            $table->unsignedMediumInteger( column: 'teacher_id');
            $table->foreign( column: 'teacher_id')->references(columns: 'id')->on(table: 'teacher')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
