#!/usr/bin/php
<?php
function ft_split($string) {
    $string = trim($string);
    while (strstr($string,"  "))
        $string = str_replace("  ", " ", $string);
    $arr = explode(" ", $string);
    print_r($arr);
}
?>