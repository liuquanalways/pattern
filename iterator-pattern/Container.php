<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 13:46
 */

namespace DesignPattern\IteratorPattern;


interface Container
{
    /**
     * get Iterator
     * @return Iterator
     */
    public function getIterator(): Iterator;

}