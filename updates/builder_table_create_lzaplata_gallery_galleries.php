<?php namespace LZaplata\Gallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLzaplataGalleryGalleries extends Migration
{
    public function up()
    {
        Schema::create('lzaplata_gallery_galleries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('lzaplata_gallery_galleries');
    }
}