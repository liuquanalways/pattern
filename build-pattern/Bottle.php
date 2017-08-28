<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 17:58
 */

namespace DesignPattern\BuildPattern;


class Bottle implements Packing
{

    public function pack()
    {
        echo "packing by bottle";
    }

}