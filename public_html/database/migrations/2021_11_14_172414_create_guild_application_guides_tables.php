<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildApplicationGuidesTables extends Migration
{
    public function up()
    {
        Schema::create('guild_application_guides', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->string('titleWhite', 200)->nullable();
            $table->string('titleOrange', 200)->nullable();
            $table->text('description')->nullable();
    });

        Schema::create('guild_application_guide_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'guild_application_guide');
        });

        
    }

    public function down()
    {
        
        Schema::dropIfExists('guild_application_guide_slugs');
        Schema::dropIfExists('guild_application_guides');
    }
}
