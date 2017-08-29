<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 10:58
 */
require_once "./Autoload.php";
Autoload::register();

use DesignPattern\CommandPattern\{Stock, BuyStock, SellStock, Broker};

$stock = new Stock();

$buyStockOrder = new BuyStock($stock);

$sellStockOrder = new SellStock($stock);

$broker = new Broker();

$broker->takeOrder($buyStockOrder);
$broker->takeOrder($sellStockOrder);

$broker->placeOrders();