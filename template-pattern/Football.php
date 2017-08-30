<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/30
 * Time: 14:04
 */

namespace DesignPattern\TemplatePattern;


class Football extends Game
{
    public function initialize(): void
    {
        echo "\nFootball Game Initialized! Start playing.";
    }

    public function startPlay(): void
    {
        echo "\nFootball Game Started. Enjoy the game!";
    }

    public function endPlay(): void
    {
        echo "\nFootball Game Finished!";
    }
}