<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 18:07
 */

namespace DesignPattern\NullObjectPattern;


class CustomerFactory
{

    public const NAMES = ["Rob", "Joe", "Julie"];

    public static function getCustomer(string $name): AbstractCustomer
    {
        if (in_array($name, self::NAMES)) {
            return new RealCustomer($name);
        } else {
            return new NullCustomer();
        }
    }

}