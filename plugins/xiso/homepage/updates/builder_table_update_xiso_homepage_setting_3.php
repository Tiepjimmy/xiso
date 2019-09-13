<?php namespace Xiso\Homepage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateXisoHomepageSetting3 extends Migration
{
    public function up()
    {
        Schema::table('xiso_homepage_setting', function($table)
        {
            $table->string('logo', 100)->nullable();
            $table->string('name', 100)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('xiso_homepage_setting', function($table)
        {
            $table->dropColumn('logo');
            $table->dropColumn('name');
        });
    }
}
