<?php namespace Indikator\News\Components;

use Cms\Classes\ComponentBase;
use Indikator\News\Models\Posts;
use Indikator\News\Models\Categories;
use Cms\Classes\Page;
use Redirect;
use BackendAuth;
use Lang;
use Input;


class Tintuc extends ComponentBase
{
	 
    public $listpost;
    public $postone;
    public $posttwo;
    public $postall;

	public function componentDetails()
	{
		return [
            'name' =>'Tintuc',
            'description' =>'Tin Tức'
        ];
	}
	public function defineProperties()
    {
        return [];
    }
    public function onRun()
    {
        $posts = Posts::all();
        $hotNews = $posts->where('category_id',6)->where('hotnews',1)->where('featured',1)->where('status',1)->toArray();
        $postone= [];
        $i = 0;
        $j = 0;
        $count = 1;
        foreach ($hotNews as $key => $value) {

            // if ($i % 3 != 0 && $i != 0) {
            //     $postone[$j]['data'][] = $value;
            //     $postone[$j]['count'] = $count;
            // }
            // else {

                $postone[$j]['data'][] = $value;
                $postone[$j]['count'] = $count;
            // }
            if ( ($i + 1) % 3 == 0) {
                $j++;
                $count =0;
            }
           $i++;
           $count++;

            
        }
        $this->postone = $this->page['postone'] =$postone;
        // $posttwo = $this->posttwo = $this->page['posttwo'] = $hotNews->slice(3,4)->take(1);

        // $postthree = $this->postthree = $this->page['postthree'] = $hotNews->slice(5,6)->take(2);
        // $postfour = $this->postfour = $this->page['postfour'] = $hotNews->slice(7,8)->take(2);

        

        $postall = $posts->where('category_id',6)->where('featured',1)->where('status',1)->take(8);
        $listpost = $this->listpost = $this->page['listpost'] = $postall;

         
    }
    public function onPaginationajax()
    {
        $record = Input::post('record');
        $posts = Posts::where('category_id',6);
        $pagination = $posts->where('category_id',6)->offset($record)->limit(2)->where('featured',1)->where('status',1)->get();
        return response()->json($pagination);
        

    }
}