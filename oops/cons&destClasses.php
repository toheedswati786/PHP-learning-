<?php

class person{
    public $name;
    public $lname;
    public $eyeColor;

    public function __construct($data)
    {
        echo $name = $this->name = $data;
        return $this;
    }

}

$data = new person("Eric");