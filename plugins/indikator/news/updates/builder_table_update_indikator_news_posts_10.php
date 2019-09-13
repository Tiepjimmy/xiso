<?php namespace Indikator\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIndikatorNewsPosts10 extends Migration
{
    public function up()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->boolean('hotnews');
            $table->integer('user_id')->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->dropColumn('hotnews');
            $table->integer('user_id')->default(NULL)->change();
        });
    }
}
