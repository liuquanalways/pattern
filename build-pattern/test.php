<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 9:52
 */

require_once "./Autoload.php";
Autoload::register();


$mealBuilder = new \DesignPattern\BuildPattern\MealBuilder();

$vegBurger = $mealBuilder->prepareVegMeal();
echo "Veg Meal\n";
$vegBurger->showItems();
echo "Total Cost: ", $vegBurger->getCost(), "\n";


$nonVegMeal = $mealBuilder->prepareNonVegMeal();
echo "Non-Veg Meal\n";
$nonVegMeal->showItems();
echo "Total Cost: ", $nonVegMeal->getCost(), "\n";