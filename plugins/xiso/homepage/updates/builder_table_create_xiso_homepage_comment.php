<?php namespace Xiso\Homepage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateXisoHomepageComment extends Migration
{
    public function up()
    {
        Schema::create('xiso_homepage_comment', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 30);
            $table->text('content');
            $table->string('image', 100);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('xiso_homepage_comment');
    }
}
