<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/30
 * Time: 14:15
 */

namespace DesignPattern\VisitorPattern;


class Monitor implements ComputerPart
{
    /** @var string $_name */
    public const NAME = 'Monitor';

    public function getName(): string
    {
        return self::NAME;
    }

    public function accept(ComputerPartVisitor $computerPartVisitor): void
    {
        $computerPartVisitor->visit($this);
    }
}