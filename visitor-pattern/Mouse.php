<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/30
 * Time: 14:16
 */

namespace DesignPattern\VisitorPattern;


class Mouse implements ComputerPart
{
    /** @var string $_name */
    public const NAME = 'Mouse';

    public function getName(): string
    {
        return self::NAME;
    }

    public function accept(ComputerPartVisitor $computerPartVisitor): void
    {
        $computerPartVisitor->visit($this);
    }
}