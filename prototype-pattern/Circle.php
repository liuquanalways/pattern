<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 10:46
 */

namespace DesignPattern\PrototypePattern;


class Circle extends Shape
{

    public function __construct()
    {
        $this->_type = "Circle";
    }

    public function draw()
    {
        echo "Inside Circle draw() method";
    }

}