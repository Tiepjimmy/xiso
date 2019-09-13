<?php namespace Indikator\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIndikatorNewsPosts2 extends Migration
{
    public function up()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->string('contentimg1', 100)->nullable();
            $table->text('img')->nullable();
            $table->string('contentimg2', 100)->nullable();
            $table->integer('user_id')->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->dropColumn('contentimg1');
            $table->dropColumn('img');
            $table->dropColumn('contentimg2');
            $table->integer('user_id')->default(NULL)->change();
        });
    }
}
