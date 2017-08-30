<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/30
 * Time: 14:14
 */

namespace DesignPattern\VisitorPattern;


interface ComputerPartVisitor
{
    public function visit(ComputerPart $computerPart): void;
}