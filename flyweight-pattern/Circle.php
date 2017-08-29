<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 17:57
 */

namespace DesignPattern\FlyweightPattern;


class Circle implements Shape
{

    /** @var string $_color */
    private $_color;

    /** @var int $_x */
    private $_x;

    /** @var int $_y */
    private $_y;

    /** @var int $_radius */
    private $_radius;

    public function __construct(string $color)
    {
        $this->_color = $color;
    }

    /**
     * @param int $x
     */
    public function setX(int $x)
    {
        $this->_x = $x;
    }

    /**
     * @param int $y
     */
    public function setY(int $y)
    {
        $this->_y = $y;
    }

    /**
     * @param int $radius
     */
    public function setRadius(int $radius)
    {
        $this->_radius = $radius;
    }

    public function draw()
    {
        echo "\nCircle: draw() [ color: {$this->_color}, x: {$this->_x}, y: {$this->_y}, radius: {$this->_radius} ].";
    }

}