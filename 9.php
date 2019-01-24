//Write a PHP script, which changes the color of the first character of a word.<?php
$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:blue;">\1</span>',$text);
echo $text;
?>