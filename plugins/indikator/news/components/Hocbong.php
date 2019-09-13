<?php namespace Indikator\News\Components;

use Cms\Classes\ComponentBase;
use Indikator\News\Models\Posts;
use Indikator\News\Models\Categories;
use Redirect;
use BackendAuth;

class Hocbong extends ComponentBase
{
	 public $hocbongs;
    public $category;
     public $hocbong;

	public function componentDetails()
	{
		return [
            'name' =>'Hocbong',
            'description' =>'Học Bổng'
        ];
	}
	public function defineProperties()
    {
        return [];
    }
    public function onRun()
    {
            $tieude = Categories::where('category_id',2);
            $hocbongs =  $this->hocbongs = $this->page['hocbong'] = $tieude;
            
            $posts = Posts::all();
            $this->hocbong = $this->page['hocbong'] = $posts->where('featured',1)->where('category_id', 2)->take(4)->reverse();

            
    }
    protected function loadPost()
    {

    }
}