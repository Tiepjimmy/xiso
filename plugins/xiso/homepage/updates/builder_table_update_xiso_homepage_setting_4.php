<?php namespace Xiso\Homepage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateXisoHomepageSetting4 extends Migration
{
    public function up()
    {
        Schema::table('xiso_homepage_setting', function($table)
        {
            $table->renameColumn('logo', 'image');
        });
    }
    
    public function down()
    {
        Schema::table('xiso_homepage_setting', function($table)
        {
            $table->renameColumn('image', 'logo');
        });
    }
}
