<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 11:11
 */

namespace DesignPattern\InterpreterPattern;


interface Expression
{

    public function interpret(string $context): bool;

}