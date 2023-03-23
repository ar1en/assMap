<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomatedMonitoringSystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('automated_monitoring_system', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('automatedMonitoring');
            $table->uuid('system');
            $table->uuid('author');
            $table->timestamps();
            $table->softDeletes();
            #$table->timestamp('createdAt');
            #$table->timestamp('updatedAt');

            $table->foreign('automatedMonitoring')->references('id')->on('automated_monitoring');
            $table->foreign('system')->references('id')->on('systems');
            $table->foreign('author')->references('id')->on('users');
            $table->index(['automatedMonitoring', 'system', 'author']);
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
        Schema::dropIfExists('automated_monitoring_system');
    }
}
