<?php namespace Xiso\Homepage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateXisoHomepageInfo extends Migration
{
    public function up()
    {
        Schema::create('xiso_homepage_info', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 50);
            $table->text('content');
            $table->string('image', 100)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('xiso_homepage_info');
    }
}
