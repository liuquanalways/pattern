<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 17:38
 */

namespace DesignPattern\FacadePattern;


class Rectangle implements Shape
{

    public function draw()
    {
        echo "\nInside Rectangle draw() method.";
    }

}