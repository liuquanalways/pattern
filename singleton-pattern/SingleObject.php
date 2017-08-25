<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 17:23
 */

namespace DesignPattern\SingletonPattern;


class SingleObject
{
    private static $instance;

    /**
     * 防止外部实例化
     */
    private function __construct() {}

    private function __clone() {}

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function showMessage()
    {
        echo "Hello world!";
    }
}