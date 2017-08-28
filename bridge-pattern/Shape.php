<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 14:34
 */

namespace DesignPattern\BridgePattern;


abstract class Shape
{

    /** @var DrawAPI */
    protected $drawAPI;

    protected function __construct(DrawAPI $drawAPI)
    {
        $this->drawAPI = $drawAPI;
    }

    public abstract function draw();

}