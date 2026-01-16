<?php
declare(strict_types=1);

// simple array in php

$students = array ("kashif", "ali", "ahmed", "zain");

$length = count($students);

for ($i = 0; $i < $length; $i++){
    echo $students[$i]. "<br>";
}

// associative array in php

$age = array("kashif"=>"25", "ali"=>"23", "ahmed"=>"22", "zain"=>"24");
foreach($age as $key => $value){
    echo "Key=" . $key . ", Value=" . $value . "<br>";
}
// multidimensional array in php
echo "<br><br><br><br>";
$contacts = array(
    "kashif" => array(
        "phone" => "1234567890",
        "email" => "kashif@example.com"
    ),
    "ali" => array(
        "phone" => "0987654321",
        "email" => "ali@example.com"
    )
);
foreach($contacts as $name => $info){
    echo "Name: " . $name . "<br>";
    echo "Phone: " . $info['phone'] . "<br>";
    echo "Email: " . $info['email'] . "<br><br>";
}



?>