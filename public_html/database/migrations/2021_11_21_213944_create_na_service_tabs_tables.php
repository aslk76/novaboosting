<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNaServiceTabsTables extends Migration
{
    public function up()
    {
        Schema::create('na_service_tabs', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('title', 50)->nullable();
            $table->text('pricelist')->nullable();
        });
    }

    public function down()
    {
        
        Schema::dropIfExists('na_service_tabs');
    }
}
