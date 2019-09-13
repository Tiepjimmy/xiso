<?php namespace Xiso\Neworder;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Xiso\Neworder\Components\NewOrder' => 'neworder',

    	];	
    }

    public function registerSettings()
    {
    }
}
