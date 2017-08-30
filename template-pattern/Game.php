<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/30
 * Time: 13:49
 */

namespace DesignPattern\TemplatePattern;


abstract class Game
{

   public abstract function initialize(): void;

   public abstract function startPlay(): void;

   public abstract function endPlay(): void;

   // the order of game
   public final function play(): void
   {
       // init game
       $this->initialize();

       // start
       $this->startPlay();

       // end
       $this->endPlay();
   }

}