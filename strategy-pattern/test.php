<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/30
 * Time: 9:54
 */

require "./Autoload.php";
Autoload::register();

use DesignPattern\StrategyPattern\{Context, OperationAdd, OperationSubstract, OperationMultiply};


$context = new Context(new OperationAdd());
echo "\n10 + 5 = ", $context->executeStrategy(10, 5);

$context->setStrategy(new OperationSubstract());
echo "\n10 - 5 = ", $context->executeStrategy(10, 5);

$context->setStrategy(new OperationMultiply());
echo "\n10 x 5 = ", $context->executeStrategy(10, 5);