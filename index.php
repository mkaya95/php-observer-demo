<?php

require __DIR__.'/class.Subject.php';
require __DIR__.'/class.ConcreteObserverA.php';
require __DIR__.'/class.ConcreteObserverB.php';

$subject = new Subject();

$o1 = new ConcreteObserverA();
$subject->attach($o1);

$o2 = new ConcreteObserverB();
$subject->attach($o2);

$subject->someBusinessLogic();
$subject->someBusinessLogic();
$subject->someBusinessLogic();

$subject->detach($o2);

$subject->someBusinessLogic();
$subject->someBusinessLogic();
$subject->someBusinessLogic();
$subject->someBusinessLogic();