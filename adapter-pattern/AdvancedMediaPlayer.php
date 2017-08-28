<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 13:43
 */

namespace DesignPattern\AdapterPattern;


interface AdvancedMediaPlayer
{
    public function playVlc(string $filename);

    public function playMp4(string $filename);
}