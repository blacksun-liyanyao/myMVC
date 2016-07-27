<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/27 0027
 * Time: 09:53
 */

namespace myf\lib;


class Route {
    private $route;

    public function load(){
        $load = distribute();
        $className = $load['c']."Controller";
        $controllerClass = "APP"."\\".$load['m']."\\Controller\\".$className;
        $newClass = new $controllerClass();
        $newClass->{$load['a']}();
    }


}