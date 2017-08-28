<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 16:24
 */

namespace DesignPattern\CompositePattern;


class Employee
{

    /** @var string $_name */
    private $_name;

    /** @var string $_dept */
    private $_dept;

    /** @var int $_salary */
    private $_salary;

    /** @var array $_subordinates */
    private $_subordinates;

    public function __construct(string $name, string $dept, int $salary)
    {
        $this->_name = $name;
        $this->_dept = $dept;
        $this->_salary = $salary;

        $this->_subordinates = array();
    }

    public function add(Employee $e)
    {
        if (!in_array($e, $this->_subordinates)) {
            array_push($this->_subordinates, $e);
        }
    }

    public function remove(Employee $e)
    {
        $index = array_search($e, $this->_subordinates);

        if ($index !== false) {
            array_splice($this->_subordinates, $index, 1);
        }
    }

    /**
     * @return array
     */
    public function getSubordinates(): array
    {
        return $this->_subordinates;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return ("\nEmployee: [name: {$this->_name}, dept: {$this->_dept}, salary: {$this->_salary}]");
    }


}