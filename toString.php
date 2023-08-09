<?php

class Hello {
    public function __toString()
    {
        return "hello I am to string";
    }
}

$ob = new Hello;
echo $ob;