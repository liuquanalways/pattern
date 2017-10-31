<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/10/31
 * Time: 13:49
 */

namespace DesignPattern\MVCPattern;


class Student
{
    /**
     * @var $rollNo string
     */
    private $rollNo;

    /**
     * @var $name string
     */
    private $name;

    public function getRollNo(): string {
        return $this->rollNo;
    }

    public function setRollNo(string $rollNo): void {
        $this->rollNo = $rollNo;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

}