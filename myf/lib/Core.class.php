<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/27 0027
 * Time: 09:45
 */
namespace myf\lib;

class Core{

    public static function run(){
        spl_autoload_register('myf\\lib\\Core::autoload');
        $route = new Route();
        $route->load();
    }

    public static function autoload($class)
    {
        require APP_PATH.'/'.str_replace('\\', '/', $class).EXT;
    }

}