<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 18:05
 */

namespace DesignPattern\NullObjectPattern;


abstract class AbstractCustomer
{

    /** @var string $name */
    protected $name;

    /**
     * is null
     * @return bool
     */
    public abstract function isNil(): bool;


    /**
     * get name
     * @return string
     */
    public abstract function getName(): string;
}