<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 15:12
 */

namespace DesignPattern\FilterPattern;


class CriteriaSingle implements Criteria
{

    public function meetCriteria(array $persons): array
    {
        $singlePersons = array();

        /** @var Person $person*/
        foreach ($persons as $person) {
            if (strcasecmp($person->getMaritalStatus(), 'SINGLE') == 0) {
                $singlePersons[] = $person;
            }
        }

        return $singlePersons;
    }
}