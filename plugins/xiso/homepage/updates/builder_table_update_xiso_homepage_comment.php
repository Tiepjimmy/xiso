<?php namespace Xiso\Homepage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateXisoHomepageComment extends Migration
{
    public function up()
    {
        Schema::table('xiso_homepage_comment', function($table)
        {
            $table->string('year', 20);
        });
    }
    
    public function down()
    {
        Schema::table('xiso_homepage_comment', function($table)
        {
            $table->dropColumn('year');
        });
    }
}
