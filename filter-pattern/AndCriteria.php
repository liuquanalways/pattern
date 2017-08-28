<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 15:14
 */

namespace DesignPattern\FilterPattern;


class AndCriteria implements Criteria
{
    /** @var Criteria */
    private $_criteria;
    /** @var Criteria */
    private $_otherCriteria;

    public function __construct(Criteria $criteria, Criteria $otherCriteria)
    {
        $this->_criteria = $criteria;
        $this->_otherCriteria = $otherCriteria;
    }

    public function meetCriteria(array $persons): array
    {
        $firstCriteriaPersons = $this->_criteria->meetCriteria($persons);

        return $this->_otherCriteria->meetCriteria($firstCriteriaPersons);
    }
}