<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/30
 * Time: 13:53
 */

namespace DesignPattern\TemplatePattern;


class Cricket extends Game
{

    public function initialize(): void
    {
        echo "\nCricket Game Initialized! Start playing.";
    }

    public function startPlay(): void
    {
        echo "\nCricket Game Started. Enjoy the game!";
    }

    public function endPlay(): void
    {
        echo "\nCricket Game Finished!";
    }
}