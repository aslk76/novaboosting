<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayoutImagesTables extends Migration
{
    public function up()
    {
        Schema::create('layout_images', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('title', 200)->nullable();
        });

        Schema::create('layout_image_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'layout_image');
        });
    }

    public function down()
    {
        Schema::dropIfExists('layout_image_revisions');
        Schema::dropIfExists('layout_images');
    }
}
