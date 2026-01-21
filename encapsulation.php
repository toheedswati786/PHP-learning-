<?php

// it's basically making the things private which should not be publicly aviable to the user

class userData{
    private $userId = 101;

    public function printId(){
        return $this->userId;
    }
}

$print = new userData;
echo $print->printId();