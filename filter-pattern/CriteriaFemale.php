<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 15:11
 */

namespace DesignPattern\FilterPattern;


class CriteriaFemale implements Criteria
{

    public function meetCriteria(array $persons): array
    {
        $femalePersons = array();

        /** @var Person $person*/
        foreach ($persons as $person) {
            if (strcasecmp($person->getGender(), 'FEMALE') == 0) {
                $femalePersons[] = $person;
            }
        }

        return $femalePersons;
    }
}