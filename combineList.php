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
            list 1<input name="str1"><br/>
            list 2<input name="str2"><br/>
            <input type="submit" name="submit" value="Combine">
        </form>
        <?php
        if (isset($_GET['submit'])) {
            $str1 = $_GET['str1'];
            $str2 = $_GET['str2'];
            $arr1 = explode(' ', $str1);
            $arr2 = explode(' ', $str2);
            
            $result = array_diff($arr2, $arr1);
            
            foreach ($result as $value) {
                array_push($arr1, $value);
            }
            
            foreach ($arr1 as $char) {
                echo "$char ";
            }     
        }    
        ?>
    </body>
</html>