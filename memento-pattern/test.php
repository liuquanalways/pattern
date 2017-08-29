<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 16:20
 */
require_once "./Autoload.php";
Autoload::register();

use DesignPattern\MementoPattern\{Originator, Memento, CareTaker};

$originator = new Originator();

$careTaker = new CareTaker();

$originator->setState("State #1");
$originator->setState("State #2");
$careTaker->add($originator->saveStateToMemento());
$originator->setState("State #3");
$careTaker->add($originator->saveStateToMemento());
$originator->setState("State #4");

echo "\nCurrent State is: {$originator->getState()}";

$originator->getStateFromMemento($careTaker->get(0));
echo "\nFirst Saved State is: {$originator->getState()}";

$originator->getStateFromMemento($careTaker->get(1));
echo "\nSecond Saved State is: {$originator->getState()}";


