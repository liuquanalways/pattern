<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 14:31
 */

namespace DesignPattern\BridgePattern;


class RedCircle implements DrawAPI
{

    public function drawCircle(int $radius, int $x, int $y)
    {
        echo "\nDrawing Circle[ color : red, radius: ", $radius, ", x: ", $x, ", y: ", $y, " ]";
    }
}