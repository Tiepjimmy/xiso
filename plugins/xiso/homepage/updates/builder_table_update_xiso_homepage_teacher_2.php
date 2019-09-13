<?php namespace Xiso\Homepage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateXisoHomepageTeacher2 extends Migration
{
    public function up()
    {
        Schema::table('xiso_homepage_teacher', function($table)
        {
            $table->string('education', 100);
        });
    }
    
    public function down()
    {
        Schema::table('xiso_homepage_teacher', function($table)
        {
            $table->dropColumn('education');
        });
    }
}
