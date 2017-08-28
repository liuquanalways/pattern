<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 17:45
 */

require_once "./Autoload.php";
Autoload::register();

use DesignPattern\FacadePattern\ShapeMaker;

$shapeMaker = new ShapeMaker();

$shapeMaker->drawCircle();
$shapeMaker->drawRectangle();
$shapeMaker->drawSquare();
