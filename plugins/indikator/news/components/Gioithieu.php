<?php namespace Indikator\News\Components;

use Cms\Classes\ComponentBase;
use Indikator\News\Models\Posts;
use Redirect;
use BackendAuth;

class Gioithieu extends ComponentBase
{
	 public $gioithieu;

	public function componentDetails()
	{
		return [
            'name' =>'Giới Thiệu',
            'description' =>'Giới Thiệu'
        ];
	}
	public function defineProperties()
    {
        return [];
    }
    public function onRun()
    {
         $this->page['post'] = Posts::where('slug', $this->param('slug'))->first();
    }
    protected function loadPost()
    {

    }
}