#!/usr/bin/php
<?php
if ($argc == 2) {
    $str = $argv[1];
    $str = trim($str);
    while (strstr($str, "  "))
        $str = str_replace("  ", " ", $str);
    print ($str);
}
?>