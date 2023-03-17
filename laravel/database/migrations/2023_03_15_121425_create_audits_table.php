<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('audits', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('sasId')->unique();
            $table->string('code');
            $table->text('name');
            $table->text('desc');
            $table->uuid('author');
            $table->timestamps();
            #$table->timestamp('createdAt');
            #$table->timestamp('updatedAt');

            $table->foreign('author')->references('id')->on('users');
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
        Schema::dropIfExists('audits');
    }
}
