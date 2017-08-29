<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 13:49
 */

namespace DesignPattern\IteratorPattern;


class NameRepository implements Container
{

    /** @var array $names */
    public $names = ["Robert", "John", "Julie", "Lora", "King"];

    /**
     * get Iterator
     * @return Iterator
     */
    public function getIterator(): Iterator
    {
        return new NameIterator($this->names);
    }

}