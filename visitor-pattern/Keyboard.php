<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/30
 * Time: 14:14
 */

namespace DesignPattern\VisitorPattern;


class Keyboard implements ComputerPart
{
    /** @var string $_name */
    public const NAME = 'Keyboard';

    public function getName(): string
    {
        return self::NAME;
    }

    public function accept(ComputerPartVisitor $computerPartVisitor): void
    {
        $computerPartVisitor->visit($this);
    }
}