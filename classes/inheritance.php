<?php

// it's just connecting and inheriting or making realtions with other classes means getting the behavious from the parent class to the child class using extend keyword


class userData{
    public $userId = 101;
}
class printUserData extends userData{
    public function printId()
    {
        return $this->userId;
    }
}

$print = new printUserData;
echo $print->printId();
