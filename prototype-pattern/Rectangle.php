<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 10:42
 */

namespace DesignPattern\PrototypePattern;


class Rectangle extends Shape
{

    public function __construct()
    {
        $this->_type = "Rectangle";
    }

    function draw()
    {
        echo "Inside Rectangle draw() method";
    }
}