<?php namespace Indikator\News\Components;

use Cms\Classes\ComponentBase;
use Indikator\News\Models\Posts as NewsPost;
use Indikator\News\Models\Categories as NewsCategories;
use Redirect;
use BackendAuth;

class Hocphi extends ComponentBase
{
	 public $hocphi;
    public $category;

	public function componentDetails()
	{
		return [
            'name' =>'Hocphi',
            'description' =>'Học phí'
        ];
	}
	public function defineProperties()
    {
        return [];
    }
    public function onRun()
    {
            $categorys = NewsCategories::where('category_id',1);
            $category =  $this->category = $this->page['hocphi'] = $categorys;
            
    }
    protected function loadPost()
    {

    }
}