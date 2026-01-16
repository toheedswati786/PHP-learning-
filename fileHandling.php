<?php


echo "
<h3>
the first on is just readfile function which reads the content of the file and display it on the browser as below is the example of how it works
</h3><br><br>";
readfile("file.txt");


echo "<br><br><br><br><h3>
the next one is fopen function which opens the file in different modes as per the requirement below is the example of how it works<br>
means it first saves the file in a variable then we can call the variable when ever or where ever we want to use it
</h3><br><br>";

// reading the file content
// list of parameter 
// r - read only
// r+ - read and write  
// w - write only (if file exists then it will overwrite the file)
// w+ - read and write (if file exists then it will overwrite the file)
// a - append only (if file exists then it will append the file)
// a+ - read and append (if file exists then it will append the file)
// x - write only (creates a new file, if file exists then it will return false)
// x+ - read and write (creates a new file, if file exists then it will return false)
// b - binary mode
// t - text mode

$file = fopen("new.txt", "w");
$txt = "Toheed Ahmad\n";
$editing = fwrite($file, $txt);
if ($editing !== false) {
    echo "File written successfully.";
} else {
    echo "Error writing to file.";
}
fclose($file);

echo "<br><br><br><br><h3>
the next one is fread function which reads the file content in bytes as per the requirement below is the example of how it works
</h3><br><br>";

$testfile = fopen("new.txt", "r");
echo fread($testfile, filesize("new.txt"));

fclose($testfile);