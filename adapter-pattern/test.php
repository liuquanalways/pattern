<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 14:11
 */

require_once "./Autoload.php";
Autoload::register();

use \DesignPattern\AdapterPattern\AudioPlayer;

$audioPlayer = new AudioPlayer();

$audioPlayer->play("mp3", "beyond the horizon.mp3");
$audioPlayer->play("mp4", "alone.mp4");
$audioPlayer->play("vlc", "far far away.vlc");
$audioPlayer->play("avi", "mind me.avi");

