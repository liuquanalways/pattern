<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 11:37
 */
namespace DesignPattern\FactoryPattern;

class Circle implements Shape
{

    public function draw()
    {
        echo "Inside Circle draw() method.\n\n";
    }
}