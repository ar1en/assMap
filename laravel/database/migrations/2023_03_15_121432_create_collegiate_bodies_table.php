<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegiateBodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('collegiate_bodies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('type');
            $table->text('desc')->nullable();
            $table->uuid('sourceDepartment');
            #$table->uuid('status');
            #$table->time('statusDate');
            $table->uuid('author');
            $table->timestamps();
            #$table->timestamp('createdAt');
            #$table->timestamp('updatedAt');

            $table->foreign('type')->references('id')->on('collegiate_bodies_types');
            $table->foreign('sourceDepartment')->references('id')->on('departments');
            $table->foreign('sourceDepartment')->references('id')->on('departments');
            $table->foreign('author')->references('id')->on('users');
            $table->index(['body', 'sourceDepartment', 'author']);
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
        Schema::dropIfExists('collegiate_bodies');
    }
}
