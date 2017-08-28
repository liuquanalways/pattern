<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 13:48
 */

namespace DesignPattern\AdapterPattern;


class MediaAdapter implements MediaPlayer
{
    public const AUDIO_VLC = 'VLC';
    public const AUDIO_MP4 = 'MP4';

    /** @var AdvancedMediaPlayer $advancedMusicPlayer*/
    protected $advancedMusicPlayer;

    public function __construct(string $audioType)
    {
        switch (strtoupper($audioType)) {
            case self::AUDIO_VLC:
                $this->advancedMusicPlayer = new VlcPlayer();
                break;
            case self::AUDIO_MP4:
                $this->advancedMusicPlayer = new Mp4Player();
                break;
            default:
                // do nothing
        }
    }

    public function play(string $audioType, string $filename)
    {
        $type = strtoupper($audioType);

        if ($type === self::AUDIO_VLC) {
            $this->advancedMusicPlayer->playVlc($filename);
        } elseif ($type === self::AUDIO_MP4) {
            $this->advancedMusicPlayer->playMp4($filename);
        }
    }
}