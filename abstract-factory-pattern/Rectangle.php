<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 16:40
 */

namespace DesignPattern\AbstractFactoryPattern;


class Rectangle implements Shape
{
    public function draw()
    {
        echo "Inside Rectangle draw() method.\n";
    }
}