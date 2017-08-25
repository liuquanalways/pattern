<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/25
 * Time: 17:02
 */

require_once './Autoload.php';
Autoload::register();

$shapeFactory = \DesignPattern\AbstractFactoryPattern\FactoryProducer::getFactory('shape');

$circle = $shapeFactory->getShape('circle');
$circle->draw();

$rectangle = $shapeFactory->getShape('rectangle');
$rectangle->draw();

$square = $shapeFactory->getShape('square');
$square->draw();


$colorFactory = \DesignPattern\AbstractFactoryPattern\FactoryProducer::getFactory('color');

$red = $colorFactory->getColor('red');
$red->fill();

$green = $colorFactory->getColor('green');
$green->fill();

$blue = $colorFactory->getColor('blue');
$blue->fill();
