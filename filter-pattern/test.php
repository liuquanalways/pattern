<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/28
 * Time: 15:44
 */

require_once "./Autoload.php";
Autoload::register();

use \DesignPattern\FilterPattern\{Person, OrCriteria, CriteriaMale, CriteriaFemale, CriteriaSingle, AndCriteria};


function printPersons(array $persons) {
    /** @var Person $person */
    foreach ($persons as $person) {
        echo "\nPerson: [ Name: ", $person->getName(), ", Gender: ", $person->getGender(), ", Marital Status: ", $person->getMaritalStatus(), " ]";
    }
}

$persons = array();

array_push($persons, new Person("Robert","Male", "Single"));
array_push($persons, new Person("John","Male", "Married"));
array_push($persons, new Person("Laura","Female", "Married"));
array_push($persons, new Person("Diana","Female", "Single"));
array_push($persons, new Person("Mike","Male", "Single"));
array_push($persons, new Person("Bobby","Male", "Single"));

$male = new CriteriaMale();
$female = new CriteriaFemale();
$single = new CriteriaSingle();
$singleMale = new AndCriteria($single, $male);
$singleOrFemale = new OrCriteria($single, $female);

echo "\nMales: ";
printPersons($male->meetCriteria($persons));

echo "\n\nFeMales: ";
printPersons($female->meetCriteria($persons));

echo "\n\nSingle Males: ";
printPersons($singleMale->meetCriteria($persons));

echo "\n\nSingle Or Females: ";
printPersons($singleOrFemale->meetCriteria($persons));

