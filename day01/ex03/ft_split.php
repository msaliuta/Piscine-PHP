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
?>