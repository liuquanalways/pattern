<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 18:00
 */

namespace DesignPattern\BuildPattern;


abstract class Burger implements Item
{

    public function packing()
    {
        return new Wrapper();
    }

    public abstract function price();

}