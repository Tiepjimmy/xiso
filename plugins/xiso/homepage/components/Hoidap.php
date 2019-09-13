<?php namespace Xiso\Homepage\Components;

use Cms\Classes\ComponentBase;
use Xiso\Homepage\Models\Hoidap as NewHoidap;
use Db;
use Illuminate\Database\Eloquent\Model;

class Hoidap extends ComponentBase
{
    protected  $hoidap;

    public  function componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return[
            'name' => 'Hoidap',
            'description' => ' Hỏi Đáp'
        ];
    }
    public  function onRun()
    {
        $hoidap= $this->hoidap = NewHoidap::all()->take(5);
        $ahihi = $this->hoidap= $this->page['hoidap'] =$hoidap;
        
    }
}