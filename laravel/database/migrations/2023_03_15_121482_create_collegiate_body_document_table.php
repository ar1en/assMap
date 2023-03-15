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
            $table->uuid('collegiateBody')->constrained('collegiate_bodies');
            $table->uuid('document')->constrained('documents');
            $table->uuid('author')->constrained('users');
            $table->timestamp('createdaAt');
            $table->timestamp('updatedAt');
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
