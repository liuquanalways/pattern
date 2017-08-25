<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 16:46
 */

namespace DesignPattern\AbstractFactoryPattern;


class Green implements Color
{

    public function fill()
    {
        echo "Inside Green fill() method.\n";
    }

}