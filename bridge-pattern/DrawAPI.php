<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 14:29
 */

namespace DesignPattern\BridgePattern;


interface DrawAPI
{

    public function drawCircle(int $radius, int $x, int $y);

}