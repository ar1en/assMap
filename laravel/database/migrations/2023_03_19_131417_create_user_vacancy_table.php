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
        Schema::create('user_vacancy', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user')->constrained('users');
            $table->foreignUuid('vacancy')->constrained('vacancies');
            $table->foreignUuid('author')->constrained('users');
            #$table->timestamp('createdAt');
            #$table->timestamp('updatedAt');
            $table->timestamp('validFrom');
            $table->timestamp('validUntil')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['user', 'vacancy', 'author']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_vacancy');
    }
};
