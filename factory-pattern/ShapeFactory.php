<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 11:39
 */
namespace DesignPattern\FactoryPattern;

class ShapeFactory
{
    const SHAPE_CIRCLE = 'CIRCLE';
    const SHAPE_RECTANGLE = 'RECTANGLE';
    const SHAPE_SQUARE = 'SQUARE';

    public function getShape($shapeType)
    {
        if (is_null($shapeType)) {
            return null;
        }

        switch (strtoupper($shapeType)) {
            case self::SHAPE_CIRCLE:
                return new Circle();
            case self::SHAPE_RECTANGLE:
                return new Rectangle();
            case self::SHAPE_SQUARE:
                return new Square();
            default:
                return null;
        }
    }
}