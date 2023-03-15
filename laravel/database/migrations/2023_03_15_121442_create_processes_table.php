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
            $table->uuid('parentProcess')->constrained('processes');
            $table->longText('path');
            $table->integer('level');
            $table->uuid('type');
            $table->text('sasId')->unique();
            $table->string('bpmId')->unique();
            $table->text('name');
            $table->text('code');
            $table->uuid('owner')->constrained('users');
            $table->timestamp('validFrom');
            $table->timestamp('validUntil');
            $table->uuid('author')->constrained('users');
            $table->timestamp('createdAt');
            $table->timestamp('updatedAt');
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
