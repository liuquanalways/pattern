<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 10:06
 */

namespace DesignPattern\ChainOfResponsibilityPattern;


class ConsoleLogger extends AbstractLogger
{

    public function __construct(int $level)
    {
        $this->level = $level;
    }

    protected function write(string $message): void
    {
        echo "\nStandard Console::Logger: {$message}";
    }
}