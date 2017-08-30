<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 18:06
 */

namespace DesignPattern\NullObjectPattern;


class RealCustomer extends AbstractCustomer
{

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * is null
     * @return bool
     */
    public function isNil(): bool
    {
        return false;
    }

    /**
     * get name
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}