<?php

//  <!-- Basic OOP in PHP -->

class Person{
    public $name = "Drisso";
    public $age = 22;

    public function fullName () {
        return 'this is my fullname';
    }

    public function hello ($name) {
        return 'hello, ' . $name;
    }
}

$obj = new Person;

echo $obj->age; 
echo $obj->fullName();
echo $obj->hello('World');