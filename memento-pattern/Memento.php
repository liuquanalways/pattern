<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 16:06
 */

namespace DesignPattern\MementoPattern;


class Memento
{

    /** @var string $_state */
    private $_state;

    /**
     * Memento constructor.
     * @param string $state
     */
    public function __construct(string $state)
    {
        $this->_state = $state;
    }

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
    public function setState(string $state): void
    {
        $this->_state = $state;
    }

}