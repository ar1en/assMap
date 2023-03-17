<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditObjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('audit_object', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('audit');
            $table->uuid('object');
            $table->uuid('author');
            $table->timestamps();
            #$table->timestamp('createdAt');
            #$table->timestamp('updatedAt');

            $table->foreign('audit')->references('id')->on('audits');
            $table->foreign('object')->references('id')->on('objects');
            $table->foreign('author')->references('id')->on('users');
            $table->index(['audit', 'object', 'author']);
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
        Schema::dropIfExists('audit_object');
    }
}
