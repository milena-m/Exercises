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
            Side a: <input type="number" name="a"><br/>
            Side b <input type="number" name="b"><br/>
            <input type="submit" value="Calculate area" name="submit">
        </form>
        <?php
        if (isset($_GET['submit'])) {
            $a = $_GET['a'];
            $b = $_GET['b'];
            
            $area = $a*$b;
            
            echo "<br/>The area of the rectangle is $area.";
        }
        ?>
    </body>
</html>
