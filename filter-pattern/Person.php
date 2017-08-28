<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 14:57
 */

namespace DesignPattern\FilterPattern;


class Person
{

    /** @var string */
    private $_name;

    /** @var string */
    private $_gender;

    /** @var string */
    private $_maritalStatus;

    public function __construct(string $name, string $gender, string $maritalStatus)
    {
        $this->_name = $name;
        $this->_gender = $gender;
        $this->_maritalStatus = $maritalStatus;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->_name;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->_gender;
    }

    /**
     * @return string
     */
    public function getMaritalStatus(): string
    {
        return $this->_maritalStatus;
    }
}