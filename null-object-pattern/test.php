<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 18:07
 */
require_once "./Autoload.php";
Autoload::register();

use DesignPattern\NullObjectPattern\CustomerFactory;


$customer1 = CustomerFactory::getCustomer("Rob");
$customer2 = CustomerFactory::getCustomer("Bob");
$customer3 = CustomerFactory::getCustomer("Julie");
$customer4 = CustomerFactory::getCustomer("Laura");

echo "\nCustomers: ";
echo "\n\t", $customer1->getName();
echo "\n\t", $customer2->getName();
echo "\n\t", $customer3->getName();
echo "\n\t", $customer4->getName();