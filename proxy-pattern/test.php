<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 9:36
 */

require_once "./Autoload.php";
Autoload::register();

use DesignPattern\ProxyPattern\ProxyImage;

$image = new ProxyImage("test_10mb.jpg");

$image->display();