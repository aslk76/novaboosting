<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTabsTables extends Migration
{
    public function up()
    {
        Schema::create('service_tabs', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('title', 50)->nullable();
            $table->text('pricelist')->nullable();

        });

        Schema::create('service_tab_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'service_tab');
        });

        Schema::create('service_tab_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'service_tab');
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_tab_revisions');
        Schema::dropIfExists('service_tab_slugs');
        Schema::dropIfExists('service_tabs');
    }
}
