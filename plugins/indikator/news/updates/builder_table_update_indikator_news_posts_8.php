<?php namespace Indikator\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIndikatorNewsPosts8 extends Migration
{
    public function up()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->string('title', 200)->change();
            $table->integer('user_id')->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->string('title', 100)->change();
            $table->integer('user_id')->default(NULL)->change();
        });
    }
}