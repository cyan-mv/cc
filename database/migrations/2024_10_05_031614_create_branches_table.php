<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('branch_name'); // Branch name
            $table->string('branch_phone')->nullable(); // Branch phone (optional)
            $table->string('branch_address'); // Branch address
            $table->string('branch_city'); // Branch city
            $table->string('branch_country'); // Branch country
            $table->string('branch_state'); // Branch state

            // Foreign key for company
            $table->foreignId('company_id')
                ->constrained('companies') // Ensure it refers to the companies table
                ->onDelete('cascade'); // Cascade delete if a company is deleted

            // Foreign key for brand
            $table->foreignId('brand_id')
                ->constrained('brands') // Ensure it refers to the brands table
                ->onDelete('cascade'); // Cascade delete if a brand is deleted

            $table->timestamps(); // Created at, updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branches');
    }
}
