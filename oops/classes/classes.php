<?php

class users{
    public function printStatement1()
    {
        echo "first function";
        return $this;
    }
    public function printStatement2()
    {
        return "first function";
    }
}


$result = (new Users())->printStatement1()->printStatement2();
echo $result;


