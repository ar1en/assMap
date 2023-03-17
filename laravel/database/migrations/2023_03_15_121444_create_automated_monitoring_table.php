<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomatedMonitoringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('automated_monitoring', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('department');
            $table->text('desc')->nullable();
            #$table->uuid('status');
            #$table->timestamp('statusDate');
            $table->uuid('author');
            $table->timestamps();
            #$table->timestamp('createdAt');
            #$table->timestamp('updatedAt');

            $table->foreign('department')->references('id')->on('departments');
            $table->foreign('author')->references('id')->on('users');
            $table->index(['department', 'author']);
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
        Schema::dropIfExists('automated_monitoring');
    }
}
