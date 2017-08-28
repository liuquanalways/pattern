<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 13:47
 */

namespace DesignPattern\AdapterPattern;


class Mp4Player implements AdvancedMediaPlayer
{

    public function playVlc(string $filename)
    {
        // do nothing
    }

    public function playMp4(string $filename)
    {
        echo "\nPlaying mp4 file. Name: ", $filename;
    }
}