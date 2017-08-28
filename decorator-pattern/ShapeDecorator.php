<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 17:12
 */

namespace DesignPattern\DecoratorPattern;


abstract class ShapeDecorator implements Shape
{
    /** @var Shape $decoratedShape */
    protected $decoratedShape;

    public function __construct(Shape $decoratedShape)
    {
        $this->decoratedShape = $decoratedShape;
    }

    public function draw()
    {
        $this->decoratedShape->draw();
    }
}