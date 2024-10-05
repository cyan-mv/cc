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
        Schema::create('companies', function (Blueprint $table) {
            $table->id('company_id'); // Primary key
            $table->string('company_name');
            $table->string('legal_name');
            $table->string('tax_id');
            $table->string('phone');
            $table->string('address');
            $table->string('email');
            $table->string('website')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('status')->default('active'); // Default status
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
