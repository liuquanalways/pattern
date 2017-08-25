<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 11:33
 */
namespace DesignPattern\FactoryPattern;

class Rectangle implements Shape {

    public function draw()
    {
        echo "Inside Rectangle draw() method.\n\n";
    }
}