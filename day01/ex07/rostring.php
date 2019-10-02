#!/usr/bin/php
<?php
    if ($argv[1] != NULL)
    {
        $str = trim($argv[1]);
        while (strstr($str,"  ")) {
            $str = str_replace("  ", " ", $str);
        }
        $arr = explode(' ', $str);
        for ($i = 1; $i < count($arr); $i++)
        {
            echo "$arr[$i]"." ";
        }
        echo "$arr[0]"."\n";
    }
?>