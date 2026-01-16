<?php
declare(strict_types=1);

echo "
<H1>String Manipulation functions in PHP</H1>

<ul>
    <li>strlen()</li>
    <li>str_word_count()</li>
    <li>strpos()</li>
    <li>strtoupper()</li>
    <li>strtolower()</li>
    <li>str_replace()</li>
    <li>strrev()</li>
    <li>trim()</li>
    <li>explode()</li>
    <li>substr()</li>
</ul>
<br><br>
";

// 1. strlen() function
echo "<h2>1. strlen()</h2>";
echo "<p>this is the first function as it returns the length of the function</p>";

$str = "Hello, World!";
$length = strlen($str);
echo "The string was: '$str'<br>";
echo "The length of the string '$str' is: $length<br><br>";

// 2. str_word_count() function

echo "<h2>2. str_word_count()</h2>";
echo "<p>this function counts the number of words in a string</p>";
$str = "Hello, World! Welcome to PHP string manipulation.";
$wordCount = str_word_count($str);
echo "The string was: '$str'<br>";
echo "The number of words in the string is: $wordCount<br><br>";

// 3. strpos() function

echo "<h2>3. strpos()</h2>";
echo "<p>this function finds the position of the first occurrence of a substring in a string</p>";
$str = "Hello, World!";
$position = strpos($str, "World");
echo "The string was: '$str'<br>";
if (!empty($position)) {
    echo "The position of 'hi' in the string is: $position<br><br>";
} else {
    echo "'hi' not found in the string.<br><br>";
}

// 4. strtoupper() function
echo "<h2>4. strtoupper()</h2>";
echo "<p>this function converts a string to uppercase</p>";
$str = "Hello, World!";
$upperStr = strtoupper($str);
echo "The string was: '$str'<br>";
echo "The uppercase string is: $upperStr<br><br>";

// 5. strtolower() function
echo "<h2>5. strtolower()</h2>";
echo "<p>this function converts a string to lowercase</p>";
$str = "Hello, World!";
$lowerStr = strtolower($str);
echo "The string was: '$str'<br>";
echo "The lowercase string is: $lowerStr<br><br>";

// 6. str_replace() function
echo "<h2>6. str_replace()</h2>";
echo "<p>this function replaces all occurrences of a search string with a replacement string</p>";
$str = "Hello, World!";
$replacedStr = str_replace("World", "PHP", $str);
echo "The string was: '$str'<br>";
echo "The replaced string is: $replacedStr<br><br>";




?>


