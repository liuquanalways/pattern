<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/10/31
 * Time: 14:08
 */

require_once './Autoload.php';
Autoload::register();

use DesignPattern\MVCPattern\Student;
use DesignPattern\MVCPattern\StudentView;
use DesignPattern\MVCPattern\StudentController;


class MVCPatternDemo {

    public function test(): void {
        $model = self::retriveStudentFromDatabase();

        $view = new StudentView();

        $controller = new StudentController($model, $view);

        $controller->setStudentName('John');

        $controller->updateView();
    }

    public static function retriveStudentFromDatabase(): Student {
        $student = new Student();
        $student->setName('Robert');
        $student->setRollNo('10');

        return $student;
    }
}

$test = new MVCPatternDemo();
$test->test();