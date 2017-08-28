<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 14:33
 */

namespace DesignPattern\BridgePattern;


class GreenCircle implements DrawAPI
{

    public function drawCircle(int $radius, int $x, int $y)
    {
        echo "\nDrawing Circle[ color : green, radius: ", $radius, ", x: ", $x, ", y: ", $y, " ]";
    }
}