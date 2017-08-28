<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 17:10
 */

namespace DesignPattern\DecoratorPattern;


class Rectangle implements Shape
{

    public function draw()
    {
        echo "\nShape: Rectangle";
    }

}