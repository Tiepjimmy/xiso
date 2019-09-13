<?php namespace Xiso\Homepage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateXisoHomepageBanner extends Migration
{
    public function up()
    {
        Schema::create('xiso_homepage_banner', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 30);
            $table->string('image', 100);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('xiso_homepage_banner');
    }
}
