<?php namespace Indikator\News\Components;

use Cms\Classes\ComponentBase;
use Indikator\News\Models\Posts;
use Indikator\News\Models\Categories;
use Redirect;
use BackendAuth;

class Cacdai extends ComponentBase
{
	public $cacdai;
    public $categorys;
    public $category;


	public function componentDetails()
	{
		return [
            'name' =>'Chuongtrinhhoc',
            'description' =>'Chương Trình Học'
        ];
	}
	public function defineProperties()
    {
        return [];
    }
    public function onRun()
    {
           $categorys = Categories::where('category_id',3);
            $category =  $this->category = $this->page['cacdai'] = $categorys;
            $posts = Posts::all();
        $this->cacdai = $this->page['cacdai'] = $posts->where('featured',1)->where('category_id', 3)->take(6);
    }
    protected function loadPost()
    {

    }
}