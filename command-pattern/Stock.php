<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 10:39
 */

namespace DesignPattern\CommandPattern;


class Stock
{

    /** @var string $_name */
    private $_name = 'ABC';

    /** @var int $_quantity */
    private $_quantity = 10;

    public function buy(): void
    {
        echo "\nStock [ Name: {$this->_name}, Quantity: {$this->_quantity} ] bought.";
    }

    public function sell(): void
    {
        echo "\nStock [ Name: {$this->_name}, Quantity: {$this->_quantity} ] sold.";
    }

}