<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/27 0027
 * Time: 09:54
 */
function distribute(){
    if($_SERVER['PATH_INFO'] && isset($_SERVER['PATH_INFO'])){
        $pathinfo = APP.$_SERVER['PATH_INFO'];
        $arr = explode('/',$pathinfo);
        $route['m'] = $arr[2]?$arr[2]:'Home';
        $route['c'] = $arr[3]?$arr[3]:'Index';
        $route['a'] = $arr[4]?$arr[4]:'index';
        return $route;
    }
    elseif($_GET && isset($_GET)){
        $route['m'] = $_GET['m']?$_GET['m']:'Home';
        $route['c'] = $_GET['c']?$_GET['c']:'Index';
        $route['a'] = $_GET['a']?$_GET['a']:'index';
        return $route;
    }
    else{
        $route['m'] = 'Home';
        $route['c'] = 'Index';
        $route['a'] = 'index';
        return $route;
    }

}