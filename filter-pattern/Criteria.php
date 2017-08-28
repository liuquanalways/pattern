<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 15:03
 */

namespace DesignPattern\FilterPattern;


interface Criteria
{

    public function meetCriteria(array $persons): array;

}