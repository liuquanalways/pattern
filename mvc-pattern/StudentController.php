<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/10/31
 * Time: 13:59
 */

namespace DesignPattern\MVCPattern;


class StudentController
{
    /**
     * @var $model Student
     */
    private $model;

    /**
     * @var $view StudentView
     */
    private $view;

    public function __construct(Student $model, StudentView $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function setStudentName(string $name): void {
        $this->model->setName($name);
    }

    public function getStudentName(): string {
        return $this->model->getName();
    }

    public function setStudentRollNo(string $rollNo): void {
        $this->model->setRollNo($rollNo);
    }

    public function getStudentRollNo(): string {
        return $this->model->getRollNo();
    }

    public function updateView():void {
        $this->view->printStudentDetails($this->model->getName(), $this->model->getRollNo());
    }

}