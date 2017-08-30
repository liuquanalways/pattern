<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/30
 * Time: 14:16
 */

namespace DesignPattern\VisitorPattern;


class Computer implements ComputerPart
{
    /** @var string $_name */
    public const NAME = 'Computer';

    public function getName(): string
    {
        return self::NAME;
    }

    /** @var array $parts */
    protected $parts = array();

    public function __construct()
    {
        array_push($this->parts, new Mouse());
        array_push($this->parts, new Keyboard());
        array_push($this->parts, new Monitor());
    }

    public function accept(ComputerPartVisitor $computerPartVisitor): void
    {
        /** @var ComputerPart $part */
        foreach ($this->parts as $part) {
            $part->accept($computerPartVisitor);
        }

        $computerPartVisitor->visit($this);
    }
}