<?php namespace Xiso\Homepage\Components;


use Cms\Classes\ComponentBase;

use Xiso\Homepage\Models\Banner as NewBanner;
use Db;
use Illuminate\Database\Eloquent\Model;


class Banner extends ComponentBase
{
    public  $banner;
    public  function componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return [
            'name' => 'Banenr',
            'description' => ' Banner Trang Web'
        ];
    }
    public  function defineProperties()
    {
        return [];
    }
    public  function onRun()
    {
        $banner = $this->banner = NewBanner::all()->take(2);
    }
}