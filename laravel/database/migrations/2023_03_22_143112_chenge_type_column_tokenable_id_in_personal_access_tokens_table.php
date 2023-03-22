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
        Schema::table('personal_access_tokens', function (Blueprint $table) {
            if (Schema::hasColumn('personal_access_tokens', 'tokenable_id')) {
                $table->dropColumn('tokenable_id');
            }
            $table->uuid('tokenable_id')->nullable()->after('tokenable_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personal_access_tokens', function (Blueprint $table) {
            if (Schema::hasColumn('personal_access_tokens', 'tokenable_id')) {
                $table->dropColumn('tokenable_id');
            }
            $table->bigInteger('tokenable_id')->nullable()->after('tokenable_type');
        });
    }
};
