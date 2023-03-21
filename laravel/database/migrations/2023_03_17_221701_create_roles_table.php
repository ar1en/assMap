<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('roles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unique('id');
            $table->foreignUuid('parentRole')->nullable()->constrained('roles');
            $table->foreignUuid('department')->nullable()->constrained('departments');
            $table->foreignUuid('object')->nullable()->constrained('objects');
            $table->foreignUuid('process')->nullable()->constrained('processes');
            $table->string('name');
            $table->foreignUuid('author')->constrained('users');
            $table->timestamp('validFrom');
            $table->timestamp('validUntil')->nullable();
            $table->timestamps();
            $table->softDeletes();


            $table->index(['parentRole', 'author']);
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
        Schema::dropIfExists('roles');
    }
}
