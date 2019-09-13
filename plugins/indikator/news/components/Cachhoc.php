<?php namespace Indikator\News\Components;

use Cms\Classes\ComponentBase;
use Indikator\News\Models\Posts as NewsPost;
use Indikator\News\Models\Categories;
use Redirect;
use BackendAuth;

class Cachhoc extends ComponentBase
{

    public $cachhoc;
    public $title;
    public $tieude;

	public function componentDetails()
	{
		return [
            'name' =>'Cachhoc',
            'description' =>'Cách học'
        ];
	}
	public function defineProperties()
    {
        return [];
    }
    public function onRun()
    {   
            $tieude = Categories::where('category_id',4);
              $title =  $this->title = $this->page['cacdai'] = $tieude;

            $posts = NewsPost::all();
            $this->cachhoc = $this->page['cachhoc'] = $posts->where('featured',1)->where('category_id',4)->take(5)->reverse();
    }
    protected function loadPost()
    {

    }


}