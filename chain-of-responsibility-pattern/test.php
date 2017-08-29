<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 10:13
 */

require_once "./Autoload.php";
Autoload::register();

use DesignPattern\ChainOfResponsibilityPattern\{AbstractLogger, ErrorLogger, FileLogger, ConsoleLogger};

// set logger chain
$errorLogger = new ErrorLogger(AbstractLogger::ERROR);
$fileLogger = new FileLogger(AbstractLogger::DEBUG);
$consoleLogger = new ConsoleLogger(AbstractLogger::INFO);

$errorLogger->setNextLogger($fileLogger);
$fileLogger->setNextLogger($consoleLogger);

$loggerChain = $errorLogger;

$loggerChain->logMessage(AbstractLogger::INFO, 'This is an information.');

$loggerChain->logMessage(AbstractLogger::DEBUG, 'This is an debug level information.');

$loggerChain->logMessage(AbstractLogger::ERROR, 'This is an error level information.');