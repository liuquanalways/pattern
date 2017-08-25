<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 16:47
 */

namespace DesignPattern\AbstractFactoryPattern;


abstract class AbstractFactory
{

    abstract function getShape($shape);

    abstract function getColor($color);

}