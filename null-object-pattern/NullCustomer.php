<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 18:06
 */

namespace DesignPattern\NullObjectPattern;


class NullCustomer extends AbstractCustomer
{

    /**
     * is null
     * @return bool
     */
    public function isNil(): bool
    {
        return true;
    }

    /**
     * get name
     * @return string
     */
    public function getName(): string
    {
        return 'Not Available in Customer Database';
    }
}