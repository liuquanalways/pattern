<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/30
 * Time: 9:49
 */

namespace DesignPattern\StrategyPattern;


class OperationMultiply implements Strategy
{

    public function doOperation(int $num1, int $num2): int
    {
        return $num1 * $num2;
    }
}