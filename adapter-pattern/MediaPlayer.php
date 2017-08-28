<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 13:41
 */

namespace DesignPattern\AdapterPattern;


interface MediaPlayer
{
    public function play(string $audioType, string $filename);
}