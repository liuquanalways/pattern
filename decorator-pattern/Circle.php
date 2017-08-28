<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 17:11
 */

namespace DesignPattern\DecoratorPattern;


class Circle implements Shape
{

    public function draw()
    {
        echo "\nShape: Circle";
    }

}