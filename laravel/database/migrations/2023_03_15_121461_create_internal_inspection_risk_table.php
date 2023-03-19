<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('internal_inspection_risk', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('internalInspection');
            $table->uuid('risk');
            $table->uuid('author');
            $table->timestamps();
            $table->softDeletes();
            #$table->timestamp('createdAt');
            #$table->timestamp('updatedAt');

            $table->foreign('internalInspection')->references('id')->on('internal_inspections');
            $table->foreign('risk')->references('id')->on('risks');
            $table->foreign('author')->references('id')->on('users');
            $table->index(['internalInspection', 'risk', 'author']);
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
        Schema::dropIfExists('internal_inspection_risk');
    }
};
