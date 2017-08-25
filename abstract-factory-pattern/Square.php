<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 16:42
 */

namespace DesignPattern\AbstractFactoryPattern;


class Square implements Shape
{

    public function draw()
    {
        echo "Inside Square draw() method.\n";
    }

}