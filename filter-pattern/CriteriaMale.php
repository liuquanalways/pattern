<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 15:05
 */

namespace DesignPattern\FilterPattern;


class CriteriaMale implements Criteria
{

    public function meetCriteria(array $persons): array
    {
        $malePersons = array();

        /** @var Person $person*/
        foreach ($persons as $person) {
            if (strcasecmp($person->getGender(), 'MALE') == 0) {
                $malePersons[] = $person;
            }
        }

        return $malePersons;
    }
}