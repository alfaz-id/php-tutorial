<?php

require_once 'Person.php';

class Male extends Person{

    public function listPerson():void{
        $alfaz = new Person();
        $alfaz->setName("Alfaz");
        $alfaz->setAge(3);

        $irwan = new Person();
        $irwan->setName("Irwan");
        $irwan->setAge(30);

        $listPerson = new ArrayObject();
        $listPerson["irwan"] = $irwan;
        $listPerson["alfaz"] = $alfaz;

        foreach ($listPerson as $person){
            echo '_________________________________'.PHP_EOL;
            echo 'Name : '.$person->getName().PHP_EOL;
            echo 'Age  : '.$person->getAge().PHP_EOL;
        }
    }
}

$male = new Male();
$male->listPerson();
