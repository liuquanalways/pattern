<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 13:54
 */

namespace DesignPattern\IteratorPattern;


class NameIterator implements Iterator
{

    /** @var int $index */
    public $index;

    /** @var array $_names */
    private $_names;

    /**
     * @return int
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * @param int $index
     */
    public function setIndex(int $index)
    {
        $this->index = $index;
    }

    public function __construct(array $names)
    {
        $this->index = 0;
        $this->_names = $names;
    }

    /**
     * has next Object?
     * @return bool if exist true, otherwise false
     */
    public function hasNext(): bool
    {
        return $this->index < count($this->_names);
    }

    /**
     * the next object
     * @return Object
     */
    public function next()
    {
        if ($this->hasNext()) {
            return $this->_names[$this->index++];
        }
        return null;
    }
}