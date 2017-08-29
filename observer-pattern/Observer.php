<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 16:46
 */

namespace DesignPattern\ObserverPattern;


abstract class Observer
{

    /** @var Subject $subject */
    protected $subject;

    /**
     * update
     */
    public abstract function update(): void;

}