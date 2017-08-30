<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/30
 * Time: 9:48
 */

namespace DesignPattern\StrategyPattern;


class OperationSubstract implements Strategy
{

    public function doOperation(int $num1, int $num2): int
    {
        return $num1 - $num2;
    }
}