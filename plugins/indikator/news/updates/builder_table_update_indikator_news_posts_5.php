<?php namespace Indikator\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIndikatorNewsPosts5 extends Migration
{
    public function up()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->string('link_url', 50)->nullable();
            $table->integer('user_id')->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->dropColumn('link_url');
            $table->integer('user_id')->default(NULL)->change();
        });
    }
}
