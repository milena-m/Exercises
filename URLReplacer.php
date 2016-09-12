<form>
<textarea name='text' rows='5' cols='50'><p>Come and visit <a href="http://softuni.bg">the Software University</a> to master the art of programming. You can always check our <a href="www.softuni.bg/forum">forum</a> if you have any questions.</p></textarea>
<br/>
<input type='submit' name='submit' value='Replace'>
</form>

<?php
if (isset($_GET['submit'])) {
    $text = $_GET['text'];
       
    $str1 = '<a href';
    $str2 = '</a>';
    $str3 = '<a';
    
    if(strstr($text, $str1)) {
       $text = str_replace($str1, '[URL', $text);
    }
    if(strstr($text, $str2)) {
        $text = str_replace($str2, '[/URL]', $text);
    }
    if(strstr($text, $str3)) {
        $text = str_replace($str3, '[URL', $text);
    }
    echo htmlspecialchars($text);
}