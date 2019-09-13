<?php namespace Xiso\Homepage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateXisoHomepageTeacher extends Migration
{
    public function up()
    {
        Schema::table('xiso_homepage_teacher', function($table)
        {
            $table->text('content')->nullable();
            $table->string('info', 50);
        });
    }
    
    public function down()
    {
        Schema::table('xiso_homepage_teacher', function($table)
        {
            $table->dropColumn('content');
            $table->dropColumn('info');
        });
    }
}
