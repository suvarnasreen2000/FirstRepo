<?php
    $str = "This is a string";
    echo $str;
    $len = strlen($str);
    // echo "<br>The length of the string is= ";
    // echo $len;
    echo "<br> The length is = ".$len;
    //no of words in the string
    echo "<br> The number of words in the string is ".str_word_count($str)."<br>Thankyou <br>";
    echo "The reverse of the string is ".strrev($str)."&nbsp; Thankyou <br>";
    echo "The position of the string is ".strpos($str, "is")."&nbsp; Thankyou <br>";
    echo "The replaced string is ".str_replace("is","at", $str)."&nbsp; Thankyou <br>";
?>

