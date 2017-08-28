<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 14:57
 */


class Autoload
{
    public static function loader($classname)
    {
        $class = preg_replace('/\w+\\\/', '', $classname);

        $filePath = __DIR__.'\\'.$class.".php";

        if (is_readable($filePath)) {
            require_once $filePath;
        }
    }

    public static function register()
    {
        spl_autoload_register(["Autoload", "loader"]);
    }
}