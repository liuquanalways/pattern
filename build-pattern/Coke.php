<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 9:21
 */

namespace DesignPattern\BuildPattern;


class Coke extends ColdDrink
{

    public function price()
    {
        return 30.0;
    }

    public function name()
    {
        return 'Coke';
    }
}