<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 17:37
 */

namespace DesignPattern\StatePattern;


interface State
{
    /**
     * do action
     */
    public function doAction(Context $context): void;


    public function __toString(): string;
}