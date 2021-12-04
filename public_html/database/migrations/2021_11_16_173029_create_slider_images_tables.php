<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderImagesTables extends Migration
{
    public function up()
    {
        Schema::create('slider_images', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
        });

        Schema::create('slider_image_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'slider_image');
        });
    }

    public function down()
    {
        Schema::dropIfExists('slider_image_revisions');
        Schema::dropIfExists('slider_images');
    }
}
