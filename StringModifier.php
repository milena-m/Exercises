<form>
    <input name="inputString" />
    <input type="radio" name="option" value="palindrome" />Check Palindrome
    <input type="radio" name="option" value="reverse" />Reverse String
    <input type="radio" name="option" value="split" />Split
    <input type="radio" name="option" value="hash" />Hash string
    <input type="radio" name="option" value="shuffle" />Shuffle string
    <input type="submit" name="submit" value="Submit" />
</form>

<?php
if (isset($_GET['submit'])) {
    
    $str = $_GET['inputString'];
    $option = $_GET['option'];

    if ($option == "palindrome") {
        if (strrev($str) === $str) {
            echo "$str is a palindrome";
        } else {
            echo "$str is not a palindrome";
        }
    }
    
    if ($option == "reverse") {
        echo strrev($str);
    }
    
    if ($option == "split") {
        echo chunk_split($str, 1, " ");
    }
    
    if ($option == "hash") {
        echo crypt($str);
    }
    
    if ($option == "shuffle") {
        echo str_shuffle($str);
    }
}