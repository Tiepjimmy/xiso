<?php namespace Xiso\Homepage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateXisoHomepageSetting extends Migration
{
    public function up()
    {
        Schema::table('xiso_homepage_setting', function($table)
        {
            $table->string('mobie', 50)->nullable()->unsigned(false)->default('NULL')->change();
            $table->string('homephone', 50)->nullable()->unsigned(false)->default('NULL')->change();
        });
    }
    
    public function down()
    {
        Schema::table('xiso_homepage_setting', function($table)
        {
            $table->integer('mobie')->nullable()->unsigned(false)->default(NULL)->change();
            $table->integer('homephone')->nullable()->unsigned(false)->default(NULL)->change();
        });
    }
}
