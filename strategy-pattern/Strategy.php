<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/30
 * Time: 9:45
 */

namespace DesignPattern\StrategyPattern;


interface Strategy
{

    public function doOperation(int $num1, int $num2): int;

}