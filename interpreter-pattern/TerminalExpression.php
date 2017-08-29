<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 11:13
 */

namespace DesignPattern\InterpreterPattern;


class TerminalExpression implements Expression
{
    /** @var string $_data */
    private $_data;

    /**
     * TerminalExpression constructor.
     * @param string $data
     */
    public function __construct(string $data)
    {
        $this->_data = $data;
    }

    /**
     * @param string $context
     * @return bool
     */
    public function interpret(string $context): bool
    {

        if (strstr($context, $this->_data)) {
            return true;
        }
        return false;
    }
}