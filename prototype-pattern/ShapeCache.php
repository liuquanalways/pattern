<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 11:05
 */

namespace DesignPattern\PrototypePattern;


class ShapeCache
{
    private static $shapeMap = array();

    /**
     * @return Shape
     */
    public static function getShape($shapeId): Shape
    {
        $cachedShape = self::$shapeMap[$shapeId];

        return clone $cachedShape;
    }

    public static function loadCache()
    {
        $circle = new Circle();
        $circle->setId(1);
        self::$shapeMap[$circle->getId()] = $circle;

        $square = new Square();
        $square->setId(2);
        self::$shapeMap[$square->getId()] = $square;

        $rectangle = new Rectangle();
        $rectangle->setId(3);
        self::$shapeMap[$rectangle->getId()] = $rectangle;
    }
}