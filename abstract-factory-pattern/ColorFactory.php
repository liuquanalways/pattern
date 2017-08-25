<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 16:52
 */

namespace DesignPattern\AbstractFactoryPattern;


class ColorFactory extends AbstractFactory
{
    const COLOR_RED = 'RED';
    const COLOR_GREEN = 'GREEN';
    const COLOR_BLUE = 'BLUE';

    function getShape($shape)
    {
        return null;
    }

    function getColor($color)
    {
        if (is_null($color)) {
            return null;
        }

        switch (strtoupper($color)) {
            case self::COLOR_RED:
                return new Red();
            case self::COLOR_GREEN:
                return new Green();
            case self::COLOR_BLUE:
                return new Blue();
            default:
                return null;
        }
    }
}