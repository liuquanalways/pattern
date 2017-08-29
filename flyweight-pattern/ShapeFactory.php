<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 18:03
 */

namespace DesignPattern\FlyweightPattern;


class ShapeFactory
{

    private static $circleMap = array();

    public static function getCircle(string $color): Circle
    {
        $circle = isset(self::$circleMap[$color]) ? self::$circleMap[$color] : null;

        if (is_null($circle)) {
            $circle = new Circle($color);
            self::$circleMap[$color] = $circle;
            echo "\nCreating Circle of Color: {$color}";
        }

        return $circle;
    }

}