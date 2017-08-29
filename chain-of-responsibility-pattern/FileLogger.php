<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 10:11
 */

namespace DesignPattern\ChainOfResponsibilityPattern;


class FileLogger extends AbstractLogger
{

    public function __construct(int $level)
    {
        $this->level = $level;
    }

    protected function write(string $message): void
    {
        echo "\nFile::Logger: {$message}";
    }
}