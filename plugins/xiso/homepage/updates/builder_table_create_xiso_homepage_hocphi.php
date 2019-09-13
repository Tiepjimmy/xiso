<?php namespace Xiso\Homepage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateXisoHomepageHocphi extends Migration
{
    public function up()
    {
        Schema::create('xiso_homepage_hocphi', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('lever');
            $table->string('dai', 15);
            $table->string('monhoc', 20);
            $table->string('theomon', 20);
            $table->string('theodai', 20);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('xiso_homepage_hocphi');
    }
}
