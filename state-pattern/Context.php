<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 17:38
 */

namespace DesignPattern\StatePattern;


class Context
{

    /** @var State $_state */
    private $_state;

    public function __construct(State $state = null)
    {
        $this->_state = $state;
    }

    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->_state;
    }

    /**
     * @param State $state
     */
    public function setState(State $state): void
    {
        $this->_state = $state;
    }

}