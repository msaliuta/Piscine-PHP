#!/usr/bin/php
<?php
if ($argc != 4) {
    print("Incorrect Parameters\n");
    exit;
}
$op = trim($argv[2]);
switch ($op) {
    case '+':
        $res = $argv[1] + $argv[3];
        break;
    case '-':
        $res = $argv[1] - $argv[3];
        break;
    case '*':
        $res = $argv[1] * $argv[3];
        break;
    case '/':
        if ($argv[3] == 0) {
            print("Dividing by zero\n");
            exit;
        }
        $res = $argv[1] / $argv[3];
        break;
    case '%':
        if ($argv[3] == 0) {
            print("Dividing by zero\n");
            exit;
        }
        $res = $argv[1] % $argv[3];
        break;
    default:
        print("Incorrect Parameters");
        break;
}
print("$res\n");
?>