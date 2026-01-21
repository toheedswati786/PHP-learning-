<?php

// it's basically allows users to use a specific method inside a class rather than using a whole class

abstract class userData{
    abstract public function userName();
}

class PrintName extends userData{
    public function userName(){
        return "Daniel";
    }
}

$objects = new PrintName;
echo $objects->userName();