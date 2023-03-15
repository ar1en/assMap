<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssuranceMapRiskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('assurance_map_risk', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('assuranceMap')->constrained('assurance_maps');
            $table->uuid('risk')->constrained('risks');
            $table->uuid('author')->constrained('users');
            $table->timestamp('createdAt');
            $table->timestamp('updatedAt');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assurance_map_risk');
    }
}
