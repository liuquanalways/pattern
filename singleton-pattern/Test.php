<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 17:30
 */

require_once "./Autoload.php";
Autoload::register();


$singleton = \DesignPattern\SingletonPattern\SingleObject::getInstance();
$singleton->showMessage();