<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 16:47
 */

require_once "./Autoload.php";
Autoload::register();

use DesignPattern\CompositePattern\Employee;

$ceo = new Employee("John", "CEO", 30000);

$headSales = new Employee("Robert","Head Sales", 20000);

$headMarketing = new Employee("Michel","Head Marketing", 20000);

$clerk1 = new Employee("Laura","Marketing", 10000);
$clerk2 = new Employee("Bob","Marketing", 10000);

$salesExecutive1 = new Employee("Richard","Sales", 10000);
$salesExecutive2 = new Employee("Rob","Sales", 10000);

$ceo->add($headSales);
$ceo->add($headMarketing);

$headMarketing->add($clerk1);
$headMarketing->add($clerk2);

$headSales->add($salesExecutive1);
$headSales->add($salesExecutive2);

echo $ceo;

/** @var Employee $subordinate */
foreach ($ceo->getSubordinates() as $subordinate) {
    echo $subordinate;

    foreach ($subordinate->getSubordinates() as $employee ) {
        echo $employee;
    }
}