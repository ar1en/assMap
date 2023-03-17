<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssueProcessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('issue_process', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('issue');
            $table->uuid('process');
            $table->uuid('author');
            $table->timestamps();
            #$table->timestamp('createdAt');
            #$table->timestamp('updatedAt');

            $table->foreign('issue')->references('id')->on('issues');
            $table->foreign('process')->references('id')->on('processes');
            $table->foreign('author')->references('id')->on('users');
            $table->index(['issue', 'process', 'author']);
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
        Schema::dropIfExists('issue_process');
    }
}
