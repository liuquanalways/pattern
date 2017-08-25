<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 17:54
 */

namespace DesignPattern\BuildPattern;


interface Item
{

    public function name();

    public function packing();

    public function price();

}