<?php

class Student {
    public $name = 'hi';
    public $name2;

    //Getter
    public function getName () {
        return $this->name;
    }

    //Setter
    public function setName ($name) {
        $this->name2 = $name;
    }
};

$obj = new Student;
echo $obj->getName();
$obj->setName("drisso");