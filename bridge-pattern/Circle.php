<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 14:37
 */

namespace DesignPattern\BridgePattern;


class Circle extends Shape
{
    /** @var integer */
    private $_x, $_y, $_radius;

    /**
     * @param int $x
     * @param int $y
     * @param int $radius
     * @param DrawAPI $drawAPI
     */
    public function __construct(int $x, int $y, int $radius, DrawAPI $drawAPI)
    {
        parent::__construct($drawAPI);

        $this->_x = $x;
        $this->_y = $y;
        $this->_radius = $radius;
    }

    public function draw()
    {
        $this->drawAPI->drawCircle($this->_radius, $this->_x, $this->_y);
    }
}