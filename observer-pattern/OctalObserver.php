<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 16:54
 */

namespace DesignPattern\ObserverPattern;


class OctalObserver extends Observer
{
    /**
     * OctalObserver constructor.
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
        echo "\nOctal String: " . decoct($this->subject->getState());
    }
}