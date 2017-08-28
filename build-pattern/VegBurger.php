<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 9:16
 */

namespace DesignPattern\BuildPattern;


class VegBurger extends Burger
{

    public function price()
    {
        return 25.0;
    }

    public function name()
    {
        return 'veg burger';
    }
}