<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Brand name
            $table->string('location'); // Brand location
            $table->string('category'); // Brand category
            $table->string('logo')->nullable(); // Brand logo (optional)
            $table->foreignId('company_id') // Foreign key to Company
            ->constrained('companies')
                ->onDelete('cascade'); // Handle cascading deletes
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
