<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('internal_inspections_types', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('name');
            $table->uuid('author');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('author')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internal_inspections_types');
    }
};
