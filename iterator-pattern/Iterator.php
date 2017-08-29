<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 13:42
 */

namespace DesignPattern\IteratorPattern;


interface Iterator
{

    /**
     * has next Object?
     * @return bool if exist true, otherwise false
     */
    public function hasNext(): bool;

    /**
     * the next object
     * @return mixed
     */
    public function next();

}