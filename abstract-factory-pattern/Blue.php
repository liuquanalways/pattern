<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 16:45
 */

namespace DesignPattern\AbstractFactoryPattern;


class Blue implements Color
{

    public function fill()
    {
        echo "Inside Blue fill() method.\n";
    }

}