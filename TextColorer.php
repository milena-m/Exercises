<form>
    <textarea rows="2" cols="30" name="text">What a wonderful world!</textarea><br/>
    <input type="submit" name="submit" value="Color text">
</form>

<?php
if (isset($_GET['submit'])) {
    $text = $_GET['text'];
    $chars = str_split($text);
    foreach($chars as $char) { 
        if (ord($char)%2==0) {
            echo "<span style='color:red;'> $char </span>"; 
        } else {
            echo "<span style='color:blue;'> $char </span>"; 
        }
    }
}   