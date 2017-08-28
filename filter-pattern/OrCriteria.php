<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 15:31
 */

namespace DesignPattern\FilterPattern;


use DesignPattern\BridgePattern\Circle;

class OrCriteria implements Criteria
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
        $firstCriteriaItems = $this->_criteria->meetCriteria($persons);
        $otherCriteriaItems = $this->_otherCriteria->meetCriteria($persons);

        /** @var Person $person */
        foreach ($otherCriteriaItems as $person) {
            if (!in_array($person, $firstCriteriaItems)) {
                array_push($firstCriteriaItems, $person);
            }
        }

        return $firstCriteriaItems;
    }
}