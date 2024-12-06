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
        Schema::create('db_docs', function (Blueprint $table) {
            $table->id();
            $table->integer('document_id')->nullable();
            $table->string('title')->nullable();
            $table->string('document_code')->nullable();
            $table->boolean('all_vehicles')->nullable();
            $table->string('visibility')->nullable();
            $table->string('published_year')->nullable();
            $table->string('published_month')->nullable();
            $table->string('path')->nullable();
            $table->integer('document_type_id')->nullable();
            $table->string('document_type')->nullable();
            $table->integer('vehicle_type_id')->nullable();
            $table->string('model_year')->nullable();
            $table->string('carline')->nullable();
            $table->string('drivetrain')->nullable();
            $table->string('engine')->nullable();
            $table->string('transmission')->nullable();
            $table->string('model_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('db_docs');
    }
};
