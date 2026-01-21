<?php

declare(strict_types=1);

$name = "tim";
$bio = "this is my bio";
$status = "logged_in"; 


$user_data = array ('name'=>$name, 'bio'=>$bio, 'status'=>$status);

// print_r($user_data);

// foreach ($user_data as $key => $value){
//     echo $key .": ";
//     echo $_SESSION[$key] = $value . "<br>";
// }

$encoded_data = json_encode($user_data);;

echo $encoded_data;

echo "<br><br>";

$decoded_data = json_decode($encoded_data, true);
foreach ($decoded_data as $key => $value){
    echo $key .": " . $value . "<br>";
}
?>