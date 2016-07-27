<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/27 0027
 * Time: 09:40
 */
//设置时区
error_reporting(2);
date_default_timezone_set('PRC');
define('BASEDIR', __DIR__);
//项目跟路径
define('APP_PATH', dirname($_SERVER['SCRIPT_FILENAME']));
//项目相对目录
define("SITE_PATH", dirname($_SERVER['SCRIPT_NAME']));
//核心类路径
define("CORE_PATH",dirname($_SERVER['SCRIPT_FILENAME'])."/myf/lib/");
//定义类后缀
define('EXT','.class.php');
//网站根目录
define('GEN',$_SERVER['DOCUMENT_ROOT']);
//系统配置路径
define('APP_SYS_PATH', dirname(__FILE__));
define('APP_SITE_PATH', dirname(dirname(__FILE__)));
require "common/functions.php";
require CORE_PATH.'Core'.EXT;

myf\lib\Core::run();


