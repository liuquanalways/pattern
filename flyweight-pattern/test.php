<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 17:51
 */
require_once "./Autoload.php";
Autoload::register();

use DesignPattern\FlyweightPattern\ShapeFactory;


$colors = array(
    'Red',
    'Green',
    'Blue',
    'White',
    'Black'
);


for ($i = 0; $i < 20; $i++)
{
    $circle = ShapeFactory::getCircle($colors[mt_rand(0, 4)]);
    $circle->setX(mt_rand(0, 100));
    $circle->setY(mt_rand(0, 100));
    $circle->setRadius(mt_rand(0, 100));
    $circle->draw();
}