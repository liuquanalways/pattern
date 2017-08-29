<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 16:08
 */

namespace DesignPattern\MementoPattern;


class Originator
{

    /** @var string $_state */
    private $_state;

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->_state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->_state = $state;
    }

    /**
     * @return Memento
     */
    public function saveStateToMemento(): Memento
    {
        return new Memento($this->_state);
    }

    public function getStateFromMemento(Memento $memento): void
    {
        $this->_state = $memento->getState();
    }

}