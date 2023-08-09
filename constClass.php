<?php

class Test {
    private const NAME = 'Shoeb';

    public function getConstName () {
        echo self :: NAME;
        echo Test :: NAME;
    }
};

$obj = new Test;
$obj->getConstName();