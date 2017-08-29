<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 16:56
 */
require_once "./Autoload.php";
Autoload::register();

use DesignPattern\ObserverPattern\{Subject, Observer, BinaryObserver, OctalObserver, HexaObserver};

$subject = new Subject();

new HexaObserver($subject);
new OctalObserver($subject);
new BinaryObserver($subject);

echo "\nFirst state change: 15";
$subject->setState(15);

echo "\nSecond state change: 39";
$subject->setState(39);