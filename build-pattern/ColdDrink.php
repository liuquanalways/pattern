<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 18:02
 */

namespace DesignPattern\BuildPattern;


abstract class ColdDrink implements Item
{

    public function packing()
    {
        return new Bottle();
    }

    public abstract function price();

}