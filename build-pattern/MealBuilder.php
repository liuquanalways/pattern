<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 9:48
 */

namespace DesignPattern\BuildPattern;


class MealBuilder
{
    public function prepareVegMeal()
    {
        $meal = new Meal();
        $meal->addItem(new VegBurger());
        $meal->addItem(new Coke());

        return $meal;
    }

    public function prepareNonVegMeal()
    {
        $meal = new Meal();
        $meal->addItem(new ChickenBurger());
        $meal->addItem(new Pepsi());

        return $meal;
    }
}