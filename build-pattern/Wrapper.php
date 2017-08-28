<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 17:57
 */

namespace DesignPattern\BuildPattern;


class Wrapper implements Packing
{

    public function pack()
    {
        echo "packing by wrapper";
    }

}