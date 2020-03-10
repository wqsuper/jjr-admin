<?php
namespace Jjr\admin\Facades;

use Illuminate\Support\Facades\Facade;

class AliVms extends Facade
{
	protected static function getFacadeAccessor() { 
		return 'yuname'; 
	}

    public static  function uName(){
    	die('ok2');
    }
}