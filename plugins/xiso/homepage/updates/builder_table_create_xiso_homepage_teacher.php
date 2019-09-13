<?php namespace Xiso\Homepage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateXisoHomepageTeacher extends Migration
{
    public function up()
    {
        Schema::create('xiso_homepage_teacher', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 30);
            $table->string('image', 100)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('xiso_homepage_teacher');
    }
}
