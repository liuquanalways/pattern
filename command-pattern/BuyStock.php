<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 10:45
 */

namespace DesignPattern\CommandPattern;


class BuyStock implements Order
{
    /** @var Stock $_stack */
    private $_stack;

    /**
     * BuyStock constructor.
     * @param Stock $stock
     */
    public function __construct(Stock $stock)
    {
        $this->_stack = $stock;
    }

    /**
     * exec command
     */
    public function execute(): void
    {
        $this->_stack->buy();
    }
}