<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 10:51
 */

namespace DesignPattern\CommandPattern;


class Broker
{

    /** @var array $_orderList */
    private $_orderList = array();

    /**
     * @param Order $order
     */
    public function takeOrder(Order $order): void
    {
        $index = array_search($order, $this->_orderList);

        if ($index === false) {
            array_push($this->_orderList, $order);
        } else {
            $this->_orderList[$index] = $order;
        }
    }

    public function placeOrders(): void
    {
        /** @var Order $order */
        foreach ($this->_orderList as $order) {
            $order->execute();
        }
        $this->_orderList = [];
    }

}