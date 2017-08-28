<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 13:45
 */

namespace DesignPattern\AdapterPattern;


class VlcPlayer implements AdvancedMediaPlayer
{

    public function playVlc(string $filename)
    {
        echo "\nPlaying vlc file. Name: ", $filename;
    }

    public function playMp4(string $filename)
    {
        // do nothing
    }
}