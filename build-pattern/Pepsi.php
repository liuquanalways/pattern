<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 9:22
 */

namespace DesignPattern\BuildPattern;


class Pepsi extends ColdDrink
{

    public function price()
    {
        return 35.0;
    }

    public function name()
    {
        return 'Pepsi';
    }
}