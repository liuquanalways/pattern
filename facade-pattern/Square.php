<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 17:41
 */

namespace DesignPattern\FacadePattern;


class Square implements Shape
{

    public function draw()
    {
        echo "\nInside Square draw() method.";
    }

}