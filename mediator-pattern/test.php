<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 15:54
 */
require_once "./Autoload.php";
Autoload::register();

use DesignPattern\MediatorPattern\User;


$robert = new User("Robert");
$john = new User("John");

$robert->sendMessage("hi, John!");
$john->sendMessage("hello, Robert!");