//Write a PHP script, to check whether the page is called from 'https' or 'http'.<?php
$url = $_SERVER['REQUEST_URI'];
echo "$url <br/>";
if (parse_url($url, PHP_URL_SCHEME)) {
    if ($url['scheme'] == "http") 
    {
       echo "http <br/>";
    }
else if ($url['scheme'] == "https") {
        echo "https <br/>";
    }
}
else {
    echo "[Error] : No scheme";
}
?>