<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_author')->default(0);
            $table->datetime('post_date');
            $table->datetime('post_date_gmt');
            $table->text('post_content');
            $table->text('post_excerpt');
            $table->string('post_status',20)->default('publish');
            $table->string('comment_status',20)->default('open');
            $table->string('ping_status',20)->default('open');
            $table->string('post_name',200);
            $table->text('to_ping');
            $table->text('pinged');
            $table->datetime('post_modified');
            $table->datetime('post_modified_gmt');
            $table->text('post_content_filtered');
            $table->unsignedBigInteger('post_parent')->default(0);
            $table->string('guid',255);
            $table->integer('menu_order')->default(0);
            $table->string('post_type',20);
            $table->string('post_mime_type',100);
            $table->bigInteger('comment_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cms_posts');
    }
}
