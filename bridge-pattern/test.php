<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 14:47
 */

require_once "./Autoload.php";
Autoload::register();

use DesignPattern\BridgePattern\{Circle, RedCircle, GreenCircle};

$redCircle = new Circle(100, 100, 10, new RedCircle());
$greenCircle = new Circle(100, 100, 10, new GreenCircle());

$redCircle->draw();
$greenCircle->draw();
