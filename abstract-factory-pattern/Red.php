<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 16:44
 */

namespace DesignPattern\AbstractFactoryPattern;


class Red implements Color
{

    public function fill()
    {
        echo "Inside Red fill() method.\n";
    }

}