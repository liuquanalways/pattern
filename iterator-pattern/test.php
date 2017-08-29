<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 14:02
 */
require_once "./Autoload.php";
Autoload::register();

use DesignPattern\IteratorPattern\{NameRepository};

$nameRepository = new NameRepository();

for ($itr = $nameRepository->getIterator(); $itr->hasNext(); ) {
    echo "\nName: {$itr->next()}";
}