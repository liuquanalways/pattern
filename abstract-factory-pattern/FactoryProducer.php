<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 16:57
 */

namespace DesignPattern\AbstractFactoryPattern;


class FactoryProducer
{
    const SHAPE_FACTORY = 'SHAPE';
    const COLOR_FACTORY = 'COLOR';

    public static function getFactory($factory)
    {
        if (is_null($factory)) {
            return null;
        }

        switch (strtoupper($factory)) {
            case self::COLOR_FACTORY:
                return new ColorFactory();
            case self::SHAPE_FACTORY:
                return new ShapeFactory();
            default:
                return null;
        }
    }
}