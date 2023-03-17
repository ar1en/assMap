<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('document_processes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('document');
            $table->uuid('process');
            $table->uuid('author');
            $table->timestamps();
            #$table->timestamp('createdAt');
            #$table->timestamp('updatedAt');

            $table->foreign('document')->references('id')->on('documents');
            $table->foreign('process')->references('id')->on('processes');
            $table->foreign('author')->references('id')->on('users');
            $table->index(['document', 'process', 'author']);
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
        Schema::dropIfExists('document_processes');
    }
}
