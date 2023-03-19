<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiskRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('risk_rates', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('risk');
            $table->uuid('process');
            $table->uuid('object');
            $table->double('rate');
            $table->uuid('author');
            $table->timestamps();
            $table->softDeletes();
            #$table->timestamp('createdAt');
            #$table->timestamp('updatedAt');

            $table->foreign('risk')->references('id')->on('risks');
            $table->foreign('process')->references('id')->on('processes');
            $table->foreign('object')->references('id')->on('objects');
            $table->foreign('author')->references('id')->on('users');
            $table->index(['risk', 'process', 'object', 'author']);
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
        Schema::dropIfExists('risk_rates');
    }
}
