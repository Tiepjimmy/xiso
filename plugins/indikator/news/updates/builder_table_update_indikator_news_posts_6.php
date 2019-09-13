<?php namespace Indikator\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIndikatorNewsPosts6 extends Migration
{
    public function up()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->string('link_url12', 50)->nullable();
            $table->integer('user_id')->default(null)->change();
            $table->renameColumn('link_url', 'link_url1');
        });
    }
    
    public function down()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->dropColumn('link_url12');
            $table->integer('user_id')->default(NULL)->change();
            $table->renameColumn('link_url1', 'link_url');
        });
    }
}
