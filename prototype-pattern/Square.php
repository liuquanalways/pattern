<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 10:44
 */

namespace DesignPattern\PrototypePattern;


class Square extends Shape
{

    public function __construct()
    {
        $this->_type = "Square";
    }

    public function draw()
    {
        echo "Inside Square draw() method";
    }

}