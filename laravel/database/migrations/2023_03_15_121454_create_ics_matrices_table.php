<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIcsMatricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('ics_matrices', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('object')->constrained('objects');
            $table->uuid('process')->constrained('processes');
            $table->text('desc');
            $table->boolean('ics');
            $table->boolean('impactOnRisk');
            $table->integer('testingYaer');
            $table->integer('updatingYear');
            $table->index(['object', 'process']);
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
        Schema::dropIfExists('ics_matrices');
    }
}
