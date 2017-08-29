<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 9:50
 */

namespace DesignPattern\ChainOfResponsibilityPattern;


abstract class AbstractLogger
{
    public const INFO = 1;

    public const DEBUG = 2;

    public const ERROR = 3;

    /** @var int $level */
    protected $level;

    /** @var AbstractLogger $nextLogger */
    protected $nextLogger;

    /**
     * set next logger
     * @param AbstractLogger $nextLogger
     */
    public function setNextLogger(AbstractLogger $nextLogger): void
    {
        $this->nextLogger = $nextLogger;
    }

    /**
     * log message
     * @param int $level
     * @param string $message
     */
    public function logMessage(int $level, string $message): void
    {
        if ($this->level <= $level) {
            $this->write($message);
        }

        if (!is_null($this->nextLogger)) {
            $this->nextLogger->logMessage($level, $message);
        }
    }

    abstract protected function write(string $message): void;

}