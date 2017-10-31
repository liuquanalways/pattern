<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/10/31
 * Time: 13:55
 */

namespace DesignPattern\MVCPattern;


class StudentView
{
    public function printStudentDetails(string $studentName, string $studentRo): void {
        echo "Student: \n";
        echo "\tName: ", $studentName, "\n";
        echo "\tRoll No: ", $studentRo, "\n";
    }
}