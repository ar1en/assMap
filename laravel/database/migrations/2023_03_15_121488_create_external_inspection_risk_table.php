<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExternalInspectionRiskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('external_inspection_risk', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('externalInspection');
            $table->uuid('risk');
            $table->uuid('author');
            $table->timestamps();
            $table->softDeletes();
            #$table->timestamp('createdAt');
            #$table->timestamp('updatedAt');

            $table->foreign('externalInspection')->references('id')->on('external_inspections');
            $table->foreign('risk')->references('id')->on('risks');
            $table->foreign('author')->references('id')->on('users');
            $table->index(['externalInspection', 'risk', 'author']);
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
        Schema::dropIfExists('external_inspection_risk');
    }
}
