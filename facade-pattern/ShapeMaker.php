<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 17:40
 */

namespace DesignPattern\FacadePattern;


class ShapeMaker
{

    /** @var Shape $_circle */
    private $_circle;

    /** @var Shape $_rectangle */
    private $_rectangle;

    /** @var Shape $_square */
    private $_square;

    public function __construct()
    {
        $this->_circle = new Circle();
        $this->_rectangle = new Rectangle();
        $this->_square = new Square();
    }

    public function drawCircle()
    {
        $this->_circle->draw();
    }

    public function drawRectangle()
    {
        $this->_rectangle->draw();
    }

    public function drawSquare()
    {
        $this->_square->draw();
    }

}