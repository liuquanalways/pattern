<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 11:35
 */
namespace DesignPattern\FactoryPattern;

class Square implements Shape
{

    public function draw()
    {
        echo "Inside Square draw() method.\n\n";
    }

}