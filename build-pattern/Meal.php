<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 9:23
 */

namespace DesignPattern\BuildPattern;


class Meal
{
    private $_items = array();

    public function addItem(Item $item)
    {
        array_push($this->_items, $item);
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        $cost = 0.0;

        /** @var \DesignPattern\BuildPattern\Item $item */
        foreach ($this->_items as $item) {
            $cost += $item->price();
        }

        return $cost;
    }

    public function showItems()
    {
        foreach ($this->_items as $item) {
            echo "Item : ", $item->name();
            echo ", Packing : ", $item->packing()->pack();
            echo ", Price : ", $item->price(), "\n";
        }
    }
}