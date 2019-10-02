#!/usr/bin/php
<?php
function ft_split($string) {
    $string = trim($string);
    while (strstr($string,"  ")) {
        $string = str_replace("  ", " ", $string);
    }
    if ($string != "") {
        $arr = explode(' ', $string);
    }
    else {
        $arr = array();
    }
    sort($arr);
    return ($arr);
}

$str = array();
for ($i = 1; $i < $argc; $i++) {
    $str = array_merge($str, ft_split($argv[$i]));
}
sort($str);
foreach ($str as $value) {
    print("$value\n");
}
?>