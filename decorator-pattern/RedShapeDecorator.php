<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 17:15
 */

namespace DesignPattern\DecoratorPattern;


class RedShapeDecorator extends ShapeDecorator
{

    public function __construct(Shape $decoratedShape)
    {
        parent::__construct($decoratedShape);
    }

    public function draw()
    {
        parent::draw();
        $this->_setRedBorder($this->decoratedShape);
    }

    private function _setRedBorder(Shape $decoratedShape)
    {
        echo "\nBorder Color: red";
    }

}