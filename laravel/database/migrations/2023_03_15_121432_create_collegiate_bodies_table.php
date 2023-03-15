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
            $table->uuid('body');
            $table->text('desc');
            $table->uuid('sourceDepartment')->constrained('departments');
            $table->uuid('status');
            $table->time('statusDate');
            $table->uuid('author');
            $table->timestamp('createdAt');
            $table->timestamp('updatedAt');
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
