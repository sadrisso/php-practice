<?php

class Person {
    public $name = 'Hi';
    private $age = 22;
    protected $cgpa = 2.33;

    public function getAge () {
        return $this->age;
    }
};

class Student extends Person {
    public function getCgpa () {
        return $this->cgpa;
    }
}

echo (new Person)->getAge();
echo (new Student)->getCgpa();