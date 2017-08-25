<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 16:42
 */

namespace DesignPattern\AbstractFactoryPattern;


class Circle implements Shape
{

    public function draw()
    {
        echo "Inside Circle draw() method.\n";
    }

}