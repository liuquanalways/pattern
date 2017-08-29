<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 11:25
 */

require_once "./Autoload.php";
Autoload::register();

use DesignPattern\InterpreterPattern\{Expression, TerminalExpression, OrExpression, AndExpression};

function getMaleExpression(): Expression
{
    $robert = new TerminalExpression("Robert");
    $john = new TerminalExpression("John");

    return new OrExpression($robert, $john);
}

function getMarriedWomanExpression(): Expression
{
    $julie = new TerminalExpression("Julie");
    $married = new TerminalExpression("Married");

    return new AndExpression($julie, $married);
}

$isMale = getMaleExpression();
$isMarriedWoman = getMarriedWomanExpression();

echo "\nJohn is male? ".($isMale->interpret('John') ? 'true' : 'false');
echo "\nJulie is a married women? ".($isMarriedWoman->interpret('Married Julie') ? 'true' : 'false');