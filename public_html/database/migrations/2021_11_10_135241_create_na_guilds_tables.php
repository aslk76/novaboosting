<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaGuildsTables extends Migration
{
    public function up()
    {
        Schema::create('na_guilds', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('title', 200)->nullable();

            // your generated model and form include a description field, to get you started, but feel free to get rid of it if you don't need it
            $table->text('description')->nullable();
            
            $table->integer('position')->unsigned()->nullable();

            $table->string('wowprogress')->nullable();
            $table->string('raiderio')->nullable();
            $table->string('website')->nullable();

            $table->string('faction')->nullable();
        });

        Schema::create('na_guild_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'na_guild');
        });

        Schema::create('na_guild_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'na_guild');
        });
    }

    public function down()
    {
        Schema::dropIfExists('na_guild_revisions');
        Schema::dropIfExists('na_guild_slugs');
        Schema::dropIfExists('na_guilds');
    }
}
