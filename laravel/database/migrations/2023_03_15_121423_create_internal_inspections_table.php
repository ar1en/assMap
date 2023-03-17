<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternalInspectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('internal_inspections', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('department');
            $table->text('desc');
            $table->uuid('object');
            #$table->uuid('status');
            #$table->uuid('statusDate');
            $table->uuid('author');
            $table->timestamps();
            #$table->timestamp('createdAt');
            #$table->timestamp('updatedAt');

            $table->foreign('department')->references('id')->on('departments');
            $table->foreign('author')->references('id')->on('users');
            $table->index(['department', 'object', 'status', 'author']);
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
        Schema::dropIfExists('internal_inspections');
    }
}
