<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFlashDealSectionsTables extends Migration
{
    public function up()
    {
        Schema::create('flash_deal_sections', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('title', 200)->nullable();

        });

        Schema::create('flash_deal_section_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'flash_deal_section');
        });

        
    }

    public function down()
    {
        
        Schema::dropIfExists('flash_deal_section_slugs');
        Schema::dropIfExists('flash_deal_sections');
    }
}
