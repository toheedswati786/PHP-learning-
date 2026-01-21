<?php 

declare(strict_types=1);

if($_REQUEST['value'] == '5') {
    echo "below is the method to get the document root path <BR>";

echo "<h1>". $_SERVER['DOCUMENT_ROOT']. "</h1>";

echo "below is the method to get the current script path <BR>";
echo "<h1>". $_SERVER['SCRIPT_FILENAME']. "</h1>";

echo "below is the method to get the server name <BR>";
echo "<h1>". $_SERVER['SERVER_NAME']. "</h1>";

echo "below is the method to get the server software information <BR>";
echo "<h1>". $_SERVER['SERVER_SOFTWARE']. "</h1>";

echo "below is the method to get the server protocol information <BR>";
echo "<h1>". $_SERVER['SERVER_PROTOCOL']. "</h1>";

echo "below is the method to get the request method information <BR>";
echo "<h1>". $_SERVER['REQUEST_METHOD']. "</h1>";

echo "below is the method to get the user agent information <BR>";
echo "<h1>". $_SERVER['HTTP_USER_AGENT']. "</h1>";

echo "below is the method to get the script name information <BR>";
echo "<h1>". $_SERVER['SCRIPT_NAME']. "</h1>";

echo "below is the method to get the server port information <BR>";
echo "<h1>". $_SERVER['SERVER_PORT']. "</h1>";

echo "below is the method to get the remote address information <BR>";
echo "<h1>". $_SERVER['REMOTE_ADDR']. "</h1>";

echo "below is the method to get the PHP self information <BR>";
echo "<h1>". $_SERVER['PHP_SELF']. "</h1>";
}


// as there are two difference between sessions and cookies as cookies are store on users computer in a file and sessions are stored on server side



?>