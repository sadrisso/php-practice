<?php

class Construct {
    private $name;
    private $age;

    public function getName () {
        return $this -> name;
    }
    public function getAge () {
        return $this -> age;
    }
    private function setName ($name) {
        return $this -> name = $name;
    }
    private function setAge ($age) {
        return $this -> age = $age;
    }
    public function __construct ($name, $age) {
        $this->setName($name);
        $this->setAge ($age);
    }
}

$obj = new Construct('Drisso', 22);
echo $obj->getName();
echo $obj->getAge();

function __toString(){
    
}