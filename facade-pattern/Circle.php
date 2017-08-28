<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 17:39
 */

namespace DesignPattern\FacadePattern;


class Circle implements Shape
{

    public function draw()
    {
        echo "\nInside Circle draw() method.";
    }

}