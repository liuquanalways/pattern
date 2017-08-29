<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 16:14
 */

namespace DesignPattern\MementoPattern;


class CareTaker
{

    /** @var array $_mementoList */
    private $_mementoList = array();

    /**
     * @param Memento $memento
     */
    public function add(Memento $memento): void
    {
        $index = array_search($memento, $this->_mementoList);

        if ($index !== false) {
            $this->_mementoList[$index] = $memento;
        } else {
            array_push($this->_mementoList, $memento);
        }
    }

    /**
     * @param int $index
     * @return Memento
     */
    public function get(int $index): Memento
    {
        return $this->_mementoList[$index];
    }

}