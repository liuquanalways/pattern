<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 16:55
 */

namespace DesignPattern\ObserverPattern;


class HexaObserver extends Observer
{
    /**
     * HexaObserver constructor.
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
        echo "\nHexa String: " . dechex($this->subject->getState());
    }
}