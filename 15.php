<?php
$var = basename($_SERVER['PHP_SELF']);
echo "Last modified ".date("F d Y H:i:s.", filemtime($var));
?>