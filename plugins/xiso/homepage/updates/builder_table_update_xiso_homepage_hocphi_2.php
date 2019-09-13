<?php namespace Xiso\Homepage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateXisoHomepageHocphi2 extends Migration
{
    public function up()
    {
        Schema::table('xiso_homepage_hocphi', function($table)
        {
            $table->string('monhoc', 100)->change();
        });
    }
    
    public function down()
    {
        Schema::table('xiso_homepage_hocphi', function($table)
        {
            $table->string('monhoc', 60)->change();
        });
    }
}
