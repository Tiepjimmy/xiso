<?php namespace Xiso\Homepage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateXisoHomepageHocphi extends Migration
{
    public function up()
    {
        Schema::table('xiso_homepage_hocphi', function($table)
        {
            $table->string('dai', 20)->change();
            $table->string('monhoc', 60)->change();
            $table->string('theomon', 30)->change();
        });
    }
    
    public function down()
    {
        Schema::table('xiso_homepage_hocphi', function($table)
        {
            $table->string('dai', 15)->change();
            $table->string('monhoc', 20)->change();
            $table->string('theomon', 20)->change();
        });
    }
}
