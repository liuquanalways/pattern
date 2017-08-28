<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 9:19
 */

namespace DesignPattern\BuildPattern;


class ChickenBurger extends Burger
{

    public function price()
    {
        return 50.0;
    }

    public function name()
    {
        return 'Chicken Burger';
    }
}