<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 16:48
 */

namespace DesignPattern\ObserverPattern;


class BinaryObserver extends Observer
{

    /**
     * BinaryObserver constructor.
     * @param Subject $subject
     */
    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    /**
     * update
     */
    public function update(): void
    {
        echo "\nBinary String: " . decbin($this->subject->getState());
    }
}