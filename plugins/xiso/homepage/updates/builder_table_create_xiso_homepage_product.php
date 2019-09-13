<?php namespace Xiso\Homepage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateXisoHomepageProduct extends Migration
{
    public function up()
    {
        Schema::create('xiso_homepage_product', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('image');
            $table->string('url');
            $table->integer('info_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('xiso_homepage_product');
    }
}
