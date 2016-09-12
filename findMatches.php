<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            text<input name="text"><br/>
            search substring<input name="substr"><br/>
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
        if (isset($_GET['submit'])) {
            $text = $_GET['text'];
            $substr = $_GET['substr'];
            $count = 0;
            
            echo "Number of occurences of '$substr' is ";
            echo substr_count(strtolower($text), strtolower($substr));        
        }    
        ?>
    </body>
</html>