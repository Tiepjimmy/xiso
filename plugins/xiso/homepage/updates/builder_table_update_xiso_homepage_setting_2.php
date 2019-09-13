<?php namespace Xiso\Homepage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateXisoHomepageSetting2 extends Migration
{
    public function up()
    {
        Schema::table('xiso_homepage_setting', function($table)
        {
            $table->string('mobie', 10)->default('NULL')->change();
            $table->string('homephone', 11)->default('NULL')->change();
        });
    }
    
    public function down()
    {
        Schema::table('xiso_homepage_setting', function($table)
        {
            $table->string('mobie', 50)->default('\'NULL\'')->change();
            $table->string('homephone', 50)->default('\'NULL\'')->change();
        });
    }
}
