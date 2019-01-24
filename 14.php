<?php
$data = file_get_contents("http://www.example.com/");
$html_encoded = htmlentities($data);
echo $html_encoded;
?>