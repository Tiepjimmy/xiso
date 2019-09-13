<?php namespace Xiso\Neworder\Components;

use Cms\Classes\ComponentBase;
use  Xiso\Neworder\Models\NewsOrder;
use Redirect;
use BackendAuth;
use Input;

class NewOrder extends ComponentBase
{

    public $year;

	public function componentDetails()
	{
		return [
            'name' =>'NewOrder',
            'description' =>'Đơn hàng'
        ];
	}
	public function defineProperties()
    {
        return [];
    }
    public function onRun()
    {   
        $arr=[];
        $i = 0;
        $year = date("Y");

        for($i = $year; $i >=  $year-50 ; $i-- )
        {
             $arr[]=$i;
        }
        
    	$this->neworder  = $this->page['neworder'] = $arr;
    }
    public function onCreateData()
    {
        $order = new NewsOrder();
        $order->name =Input::post('name');
        $order->email =Input::post('email');
        $order->phone =Input::post('phone');
        $order->year =Input::post('year');
        $order->city =Input::post('city');
        $order->content =Input::post('content');
        $order->save();

        return response()->json(['order',$order,'status'=>200]);

    }
   
   
}