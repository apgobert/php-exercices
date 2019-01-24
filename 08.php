//Write a PHP script, which will return the following components of the url 'https://www.w3resource.com/php-exercises/php-basic-exercises.php'.<?php
$path = "https://www.w3resource.com/php-exercises/php-basic-exercises.php";
$path = parse_url($path);
echo "SCHEME : ",$path['scheme'], "\r\n";
echo "HOST : " ,$path['host'], "\r\n";
echo " PATH : ", $path['path'], "\n";
?>