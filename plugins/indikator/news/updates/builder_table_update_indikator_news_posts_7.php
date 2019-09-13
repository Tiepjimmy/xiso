<?php namespace Indikator\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIndikatorNewsPosts7 extends Migration
{
    public function up()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->integer('user_id')->default(null)->change();
            $table->renameColumn('link_url12', 'link_url2');
        });
    }
    
    public function down()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->integer('user_id')->default(NULL)->change();
            $table->renameColumn('link_url2', 'link_url12');
        });
    }
}
