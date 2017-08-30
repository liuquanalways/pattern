<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/30
 * Time: 14:28
 */

namespace DesignPattern\VisitorPattern;


class ComputerPartDisplayVisitor implements ComputerPartVisitor
{

    public function visit(ComputerPart $computerPart): void
    {
        echo "\nDisplaying ", $computerPart->getName();
    }
}