<?php namespace Xiso\Neworder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateXisoNeworder extends Migration
{
    public function up()
    {
        Schema::create('xiso_neworder_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 30);
            $table->string('email', 40)->nullable();
            $table->integer('phone');
            $table->integer('year');
            $table->string('city', 30)->nullable();
            $table->text('content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('xiso_neworder_');
    }
}
