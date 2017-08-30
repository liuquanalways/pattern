<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/30
 * Time: 14:12
 */

namespace DesignPattern\VisitorPattern;


interface ComputerPart
{
    public function getName(): string;

    public function accept(ComputerPartVisitor $computerPartVisitor): void;

}