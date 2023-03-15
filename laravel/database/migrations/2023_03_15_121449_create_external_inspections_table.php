<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExternalInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('external_inspections', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('externalController');
            $table->text('desc');
            $table->uuid('object');
            $table->uuid('sourceDepartment')->constrained('departments');
            $table->uuid('status');
            $table->timestamp('statusDate');
            $table->uuid('author')->constrained('users');
            $table->uuid('createdAt');
            $table->uuid('updatedAt');
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
        Schema::dropIfExists('external_inspections');
    }
}
