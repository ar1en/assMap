<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssuranceMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('assurance_maps', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('period')->constrained('periods');
            $table->string('name');
            $table->uuid('status');
            $table->timestamp('statusDate');
            $table->uuid('author')->constrained('users');
            $table->timestamp('createdAt');
            $table->timestamp('updatedAt');
            $table->index('author');
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
        Schema::dropIfExists('assurance_maps');
    }
}
