<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssuranceMapIcsWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('assurance_map_ics_work', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('assuranceMap')->constrained('assurance_maps');
            $table->uuid('icsWork')->constrained('ics_works');
            $table->uuid('author')->constrained('users');
            $table->timestamp('createdAt');
            $table->timestamp('updatedAt');
            $table->index(['assuranceMap', 'icsWork', 'author']);
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
        Schema::dropIfExists('assurance_map_ics_work');
    }
}
