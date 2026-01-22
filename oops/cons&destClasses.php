<?php

class person{

    public function __construct(array $data)
    {
        $arraySize = sizeof($data);
        for($i = 0; $i< $arraySize; $i++){
            echo $this->name = $data[$i];
            echo PHP_EOL;
        }
        return $this;
    }

}
$data = array("Eric", 'Smith', 'brown');
$data = new person($data);