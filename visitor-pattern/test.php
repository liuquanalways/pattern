<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/30
 * Time: 14:35
 */
require_once "./Autoload.php";
Autoload::register();

use DesignPattern\VisitorPattern\{Computer, ComputerPartDisplayVisitor};

$computer = new Computer();
$computer->accept(new ComputerPartDisplayVisitor());