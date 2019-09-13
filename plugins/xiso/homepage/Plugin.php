<?php namespace Xiso\Homepage;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Xiso\Homepage\Components\Banner'  => 'banner',
            'Xiso\Homepage\Components\Comment' => 'comment',
            'Xiso\Homepage\Components\Hocphi'  => 'hocphi',
            'Xiso\Homepage\Components\Hoidap'  => 'hoidap',
            'Xiso\Homepage\Components\Info'    => 'info',
    		'Xiso\Homepage\Components\Setting' => 'setting',
    		'Xiso\Homepage\Components\Teacher' => 'teacher',
          
    	];
    }

    public function registerSettings()
    {
    }
}
