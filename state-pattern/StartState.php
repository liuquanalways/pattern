<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 17:39
 */

namespace DesignPattern\StatePattern;


class StartState implements State
{
    /**
     * do action
     */
    public function doAction(Context $context): void
    {
        echo "\nPlayer is in start state.";
        $context->setState($this);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "Start State";
    }
}