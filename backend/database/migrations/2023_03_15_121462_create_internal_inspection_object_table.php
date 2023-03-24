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

        Schema::create('internal_inspection_object', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('object');
            $table->uuid('inspection');
            $table->uuid('author');
            $table->timestamps();
            $table->softDeletes();
            #$table->timestamp('createdAt');
            #$table->timestamp('updatedAt');

            $table->foreign('object')->references('id')->on('objects');
            $table->foreign('inspection')->references('id')->on('internal_inspections');
            $table->foreign('author')->references('id')->on('users');
            $table->index(['object', 'inspection', 'author']);
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
        Schema::dropIfExists('internal_inspection_object');
    }
};
