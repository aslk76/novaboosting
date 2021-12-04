<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceDetailsTables extends Migration
{
    public function up()
    {
        Schema::create('service_details', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->bigInteger('service_tabs_id')->unsigned()->nullable();
            $table->foreign('service_tabs_id')->references('id')->on('service_tabs')
                ->onDelete('cascade');
            
        });

        Schema::create('service_detail_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'service_detail');
        });

        Schema::create('service_detail_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'service_detail');
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_detail_revisions');
        Schema::dropIfExists('service_detail_slugs');
        Schema::dropIfExists('service_details');
        Schema::dropIfExists('service_tabs_id');
    }
}
