<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 17:46
 */

namespace DesignPattern\StatePattern;


class StopState implements State
{
    /**
     * do action
     */
    public function doAction(Context $context): void
    {
        echo "\nPlayer is in stop state.";
        $context->setState($this);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "Stop State";
    }
}