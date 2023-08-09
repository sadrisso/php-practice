<?php

class Parant {
    public $height = '6feet';
    public $weight = '60kg';

    public function bongSho () {
        return 'Chowdhury Bongsho';
    }
};

class Child extends Parant {
    public $name = 'Kito';
};

$child = new Child;
echo $child->bongSho();