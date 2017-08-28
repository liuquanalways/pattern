<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 10:14
 */

namespace DesignPattern\PrototypePattern;

abstract class Shape
{
    private $_id;
    protected $_type;

    abstract function draw();

    /**
     * @return string
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    // if this object has some complicated objects, we should overwrite the __clone method

}