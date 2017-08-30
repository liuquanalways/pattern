<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/30
 * Time: 14:05
 */
require_once "./Autoload.php";
Autoload::register();


use DesignPattern\TemplatePattern\{Cricket, Football};

$game = new Cricket();
$game->play();

$game = new Football();
$game->play();