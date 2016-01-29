<?php

function header_redirect_permanent($url)
    {
    header($_SERVER['SERVER_PROTOCOL'] . ' 301 Moved Permanently', true, 301);
    header('Location: ' . $url);
    }

function header_no_cache()
    {
    header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); // past date to encourage expiring immediately
    }
//header_no_cache();
header('Location: index.php')
//header_redirect_permanent('index.php');
?>