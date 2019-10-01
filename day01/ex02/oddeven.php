#!/usr/bin/php
<?php
while (true) {
    print "Enter a number: ";
    $str = fgets(STDIN);
    $str = trim($str);
    if (is_numeric($str))
        if ($str % 2 == 0)
            echo "The number $str is even\n";
        else
            echo "The number $str is odd\n";
    else
        if (feof(STDIN)) {
            echo "\n";
            exit();
        } else
            echo "'$str' is not a number\n";
}
?>