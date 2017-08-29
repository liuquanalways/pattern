<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 17:47
 */
require_once "./Autoload.php";
Autoload::register();

use DesignPattern\StatePattern\{Context, StartState, StopState};

$context = new Context();

$startState = new StartState();
$startState->doAction($context);
echo "\n", $context->getState();

$stopState = new StopState();
$stopState->doAction($context);
echo "\n", $context->getState();

