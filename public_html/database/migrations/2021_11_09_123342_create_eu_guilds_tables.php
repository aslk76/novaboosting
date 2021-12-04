<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEuGuildsTables extends Migration
{
    public function up()
    {
        Schema::create('eu_guilds', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            $table->string('title', 200)->nullable();

            $table->text('description')->nullable();
            
            $table->integer('position')->unsigned()->nullable();

            $table->string('wowprogress')->nullable();
            $table->string('raiderio')->nullable();
            $table->string('website')->nullable();

            $table->string('faction')->nullable();


        });

        Schema::create('eu_guild_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'eu_guild');
        });

        Schema::create('eu_guild_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'eu_guild');
        });
    }

    public function down()
    {
        Schema::dropIfExists('eu_guild_revisions');
        Schema::dropIfExists('eu_guild_slugs');
        Schema::dropIfExists('eu_guilds');
    }
}
