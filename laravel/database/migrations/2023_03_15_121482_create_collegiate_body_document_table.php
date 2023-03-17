<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegiateBodyDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('collegiate_body_document', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('collegiateBody');
            $table->uuid('document');
            $table->uuid('author');
            $table->timestamps();
            #$table->timestamp('createdaAt');
            #$table->timestamp('updatedAt');

            $table->foreign('collegiateBody')->references('id')->on('collegiate_bodies');
            $table->foreign('document')->references('id')->on('documents');
            $table->foreign('author')->references('id')->on('users');
            $table->index(['collegiateBody', 'document', 'author']);
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
        Schema::dropIfExists('collegiate_body_document');
    }
}
