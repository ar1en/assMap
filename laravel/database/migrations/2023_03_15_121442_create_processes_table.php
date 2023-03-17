<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('processes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('parentProcess')->nullable();
            $table->longText('path');
            $table->integer('level');
            $table->uuid('type');
            $table->string('sasId')->unique();
            $table->string('bpmId')->unique();
            $table->text('name');
            $table->text('code');
            $table->uuid('owner');
            $table->timestamp('validFrom');
            $table->timestamp('validUntil')->nullable();
            $table->uuid('author');
            $table->timestamps();
            #$table->timestamp('createdAt');
            #$table->timestamp('updatedAt');

            $table->foreign('parentProcess')->references('id')->on('processes');
            $table->foreign('type')->references('id')->on('process_types');
            $table->foreign('owner')->references('id')->on('vacancies');
            $table->foreign('author')->references('id')->on('users');
            $table->index(['parentProcess', 'bpmId', 'owner', 'author']);
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
        Schema::dropIfExists('processes');
    }
}
