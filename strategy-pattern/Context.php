<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/30
 * Time: 9:50
 */

namespace DesignPattern\StrategyPattern;


class Context
{
    /** @var Strategy $_strategy */
    private $_strategy;

    public function __construct(Strategy $strategy)
    {
        $this->_strategy = $strategy;
    }

    /**
     * @param Strategy $strategy
     */
    public function setStrategy(Strategy $strategy): void
    {
        $this->_strategy = $strategy;
    }

    public function executeStrategy(int $num1, int $num2): int
    {
        return $this->_strategy->doOperation($num1, $num2);
    }

}