<?php namespace Xiso\Homepage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateXisoHomepageHoidap extends Migration
{
    public function up()
    {
        Schema::create('xiso_homepage_hoidap', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 60);
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('xiso_homepage_hoidap');
    }
}
