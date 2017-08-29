<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 10:48
 */

namespace DesignPattern\CommandPattern;


class SellStock implements Order
{
    /** @var Stock $_stock */
    private $_stock;

    /**
     * SellStock constructor.
     * @param Stock $stock
     */
    public function __construct(Stock $stock)
    {
        $this->_stock = $stock;
    }

    /**
     * exec command
     */
    public function execute(): void
    {
        $this->_stock->sell();
    }
}