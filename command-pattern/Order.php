<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 10:38
 */

namespace DesignPattern\CommandPattern;


interface Order
{
    /**
     * exec command
     */
    public function execute(): void;
}