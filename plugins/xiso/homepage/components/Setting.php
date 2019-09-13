<?php namespace Xiso\Homepage\Components;

use Cms\Classes\ComponentBase;
use Xiso\Homepage\Models\Setting as NewSetting;
use Db;
use Illuminate\Database\Eloquent\Model;

class Setting extends ComponentBase
{
    public  $setting;

    public  function componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return[
            'name' => 'Setting',
            'description' => ' Cài đặt'
        ];
    }

      public function defineProperties()
    {
        return [];
    }

    public  function onRun()
    {
        $setting= $this->setting = NewSetting::all()->take(1);
        $this->setting = $this->page['setting'] = $setting; 

    }
}