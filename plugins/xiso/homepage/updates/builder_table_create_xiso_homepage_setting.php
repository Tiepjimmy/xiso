<?php namespace Xiso\Homepage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateXisoHomepageSetting extends Migration
{
    public function up()
    {
        Schema::create('xiso_homepage_setting', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name',100)->nullable();
            $table->string('image',100)->nullable();
            $table->string('email', 40)->nullable();
            $table->integer('mobie')->nullable();
            $table->integer('homephone')->nullable();
            $table->string('address', 100)->nullable();
            $table->string('facebook', 50)->nullable();
            $table->string('youtube', 50)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('xiso_homepage_setting');
    }
}
