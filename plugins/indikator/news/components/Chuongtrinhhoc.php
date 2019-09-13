<?php namespace Indikator\News\Components;

use Cms\Classes\ComponentBase;
use Indikator\News\Models\Posts;
use Indikator\News\Models\Categories;
use Redirect;
use BackendAuth;

class Chuongtrinhhoc extends ComponentBase
{
	public $chuongtrinhhoc;

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
       $chuongtrinhhoc = $this->page['post'] = Posts::where('slug', $this->param('slug'))->first();
    }
    protected function loadPost()
    {

    }
}