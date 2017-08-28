<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 11:15
 */

require_once "./Autoload.php";
Autoload::register();

use \DesignPattern\PrototypePattern\ShapeCache;


ShapeCache::loadCache();

$clonedShape = ShapeCache::getShape(1);
echo "Shape : ", $clonedShape->getType();

$clonedShape2 = ShapeCache::getShape(2);
echo "\nShape : ", $clonedShape2->getType();

$clonedShape3 = ShapeCache::getShape(3);
echo "\nShape : ", $clonedShape3->getType();

