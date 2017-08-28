<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 17:19
 */

require_once "./Autoload.php";
Autoload::register();

use DesignPattern\DecoratorPattern\{Circle, RedShapeDecorator, Rectangle};

$circle = new Circle();

$redCircle = new RedShapeDecorator(new Circle());

$redRectangle = new RedShapeDecorator(new Rectangle());

echo "\nCircle with normal border";
$circle->draw();

echo "\nCircle with red border";
$redCircle->draw();

echo "\nRectangle with red border";
$redRectangle->draw();