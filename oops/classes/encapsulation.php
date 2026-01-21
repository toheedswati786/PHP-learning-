<?php
// it's basically making the things private which should not be publicly aviable to the user


class userid{
    private $userId = 10;
    public function printData()
    {
        $id = $this->userId;
        return $id;
    }
}

$objects = new userid;
echo $objects->printData();