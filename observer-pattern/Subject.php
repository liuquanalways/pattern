<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 16:41
 */

namespace DesignPattern\ObserverPattern;


class Subject
{
    /** @var array $_observers */
    private $_observers = array();

    /** @var int $_state */
    private $_state;

    /**
     * @return int
     */
    public function getState(): int
    {
        return $this->_state;
    }

    /**
     * @param int $state
     */
    public function setState($state): void
    {
        $this->_state = $state;
        $this->notifyAllObservers();
    }

    /**
     * attached observer
     * @param Observer $observer
     */
    public function attach(Observer $observer): void
    {
        $index = array_search($observer, $this->_observers);

        if (false === $index) {
            array_push($this->_observers, $observer);
        } else {
            $this->_observers[$index] = $observer;
        }
    }

    /**
     * notify all observers
     */
    public function notifyAllObservers(): void
    {
        /** @var Observer $observer */
        foreach ($this->_observers as $observer) {
            $observer->update();
        }
    }

}