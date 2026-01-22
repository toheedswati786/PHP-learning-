<?php

class person{
    public $name;
    public $lname;
    public $eyeColor;

    public function __construct(array $data)
    {
        $arraySize = sizeof($data);
        echo $arraySize;
        echo $name = $this->name = $data[0];
        echo PHP_EOL;
        echo $lname = $this->lname = $data[1];
        echo PHP_EOL;
        echo $eyeColor = $this->eyeColor = $data[2];
        return $this;
    }

}
$data = array("Eric", 'Smith', 'brown');
$data = new person($data);