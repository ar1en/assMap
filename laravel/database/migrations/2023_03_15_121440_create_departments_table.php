<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('departments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('parentDepartment')->nullable();
            $table->string('bpmId')->nullable();
            $table->string('sasId')->nullable();
            $table->text('name');
            $table->integer('level');
            $table->longText('path');
            #$table->uuid('assuranceMap')->constrained('assurance_maps');
            $table->uuid('author');
            $table->timestamps();
            #$table->timestamp('createdAt');
            #$table->timestamp('updatedAt');

            $table->foreign('parentDepartment')->references('id')->on('departments');
            $table->foreign('author')->references('id')->on('users');
            $table->index(['parentDepartment', 'assuranceMap', 'author']);
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
        Schema::dropIfExists('departments');
    }
}
