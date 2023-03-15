<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIcsWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('ics_works', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('type')->nullable();
            $table->uuid('object')->nullable()->constrained('objects');
            $table->uuid('process')->nullable()->constrained('processes');
            $table->mediumText('desc')->nullable();
            $table->text('executor')->nullable();
            $table->date('deadline')->nullable();
            $table->boolean('icsPerimeter')->nullable();
            $table->uuid('status')->nullable();
            $table->text('statusDesc');
            $table->uuid('author')->constrained('users');
            $table->timestamp('createdAt');
            $table->timestamp('updatedAt');
            $table->index(['type', 'object', 'process', 'status', 'author']);
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
        Schema::dropIfExists('ics_works');
    }
}
