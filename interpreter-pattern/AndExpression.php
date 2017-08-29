<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 11:22
 */

namespace DesignPattern\InterpreterPattern;


class AndExpression implements Expression
{
    /** @var Expression $_expr1 */
    private $_expr1;

    /** @var Expression $_expr2 */
    private $_expr2;

    public function __construct(Expression $expr1, Expression $expr2)
    {
        $this->_expr1 = $expr1;
        $this->_expr2 = $expr2;
    }

    public function interpret(string $context): bool
    {
        return $this->_expr1->interpret($context) && $this->_expr2->interpret($context);
    }
}