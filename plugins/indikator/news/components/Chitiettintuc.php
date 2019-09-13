<?php namespace Indikator\News\Components;

use Cms\Classes\ComponentBase;
use Indikator\News\Models\Posts;
use Indikator\News\Models\Categories;
use Redirect;
use BackendAuth;

class Chitiettintuc extends ComponentBase
{
    public $threepost;

	public function componentDetails()
	{
		return [
            'name' =>'Chitiettintuc',
            'description' =>' Chi Tiết tin tức'
        ];
	}
	public function defineProperties()
    {
        return [];
    }
    public function onRun()
    {
       $this->page['post'] = Posts::where('slug', $this->param('slug'))->first();

       $listpost = Posts::all();
       $threepost = $this->threepost = $this->page['threepost'] = $listpost->where('featured',1)->where('category_id',6)->take(3);
      



    }
    protected function loadPost()
    {

    }
}