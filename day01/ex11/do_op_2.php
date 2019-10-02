#!/usr/bin/php
<?php
    if ($argc != 2) {
        print("Incorrect Parameters");
        exit;
    }
    $str = str_replace(" ", "", $argv[1]);
    $index = strpos($str, '+') + strpos($str, '-') + strpos($str, '*') + strpos($str, '/') + strpos($str, '%');
    $a = substr($str, 0, $index);
    $b = substr($str, $index + 1);
    if (!is_numeric($a) || !is_numeric($b)) {
        print("Syntax Error");
        exit;
    }
    switch ($str[$index]) {
        case '+':
            $res = $a + $b;
            break;
        case '-':
            $res = $a - $b;
            break;
        case '*':
            $res = $a * $b;
            break;
        case '/':
            if ($b == 0) {
                print("Dividing by zero\n");
                exit;
            }
            $res = $a / $b;
            break;
        case '%':
            if ($b == 0) {
                print("Dividing by zero\n");
                exit;
            }
            $res = $a % $b;
            break;
    }
    print("$res\n");
?>