<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 14:41
 */

require_once "./Autoload.php";
Autoload::register();


$factory = new DesignPattern\FactoryPattern\ShapeFactory();

// 获取 Circle 的对象，并且调用 draw 方法
$circle = $factory->getShape('circle');
$circle->draw();

// 获取 Circle 的对象，并且调用 draw 方法
$rectangle = $factory->getShape('rectangle');
$rectangle->draw();

// 获取 Circle 的对象，并且调用 draw 方法
$square = $factory->getShape('square');
$square->draw();
