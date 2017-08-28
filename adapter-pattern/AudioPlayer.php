<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 14:02
 */

namespace DesignPattern\AdapterPattern;


class AudioPlayer implements MediaPlayer
{
    public const AUDIO_MP3 = 'MP3';

    protected $mediaAdapter;

    public function play(string $audioType, string $filename)
    {
        $type = strtoupper($audioType);

        if ($type === self::AUDIO_MP3) {
            echo "\nPlaying mp3 file. Name: ", $filename;
        } elseif ($type === MediaAdapter::AUDIO_VLC || $type === MediaAdapter::AUDIO_MP4) {
            $this->mediaAdapter = new MediaAdapter($audioType);
            $this->mediaAdapter->play($audioType, $filename);
        } else {
            echo "\nInvalid media. ", $audioType, " format not supported";
        }
    }
}