<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromoBannersTables extends Migration
{
    public function up()
    {
        Schema::create('promo_banners', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();

            $table->text('caption')->nullable();
            $table->text('link')->nullable();

            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('promo_banner_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'promo_banner');
        });
    }

    public function down()
    {
        Schema::dropIfExists('promo_banner_revisions');
        Schema::dropIfExists('promo_banners');
    }
}
