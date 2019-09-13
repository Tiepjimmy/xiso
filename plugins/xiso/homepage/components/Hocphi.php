<?php namespace Xiso\Homepage\Components;

use Cms\Classes\ComponentBase;
use Xiso\Homepage\Models\Hocphi as NewHocphi;
use Db;
use Illuminate\Database\Eloquent\Model;
use input;


class Hocphi extends ComponentBase
{
    public  $hocphi;

    public  function componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return[
            'name' => 'Hocphi',
            'description' => 'Học phí'
        ];
    }

      public function defineProperties()
    {
        return [];
    }

    public  function onRun()
    {
        $hocphi= $this->hocphi = NewHocphi::all();
        $this->hocphi = $this->page['hocphi'] = $hocphi; 

    }
     public function onCreateData ()
    {
        $order =$this->order->create();
        $order->name = Input::post('name');
        $order->email = Input::post('email');
        $order->phone = Input::post('phone');
        $order->year = Input::post('year');
        $order->city = Input::post('city');
        $order->content = Input::post('content');
        $order->save();

       return response()->json(['order' =>$order, 'status'=>200]);
       $this->newoder = $this->page['neworder'] = NewsOrder::all();

      


    }
}