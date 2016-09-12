<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            Enter first number: <input name="a"><br/>
            Select operator:
            <select name="operator">
                <option value="sum">+</option>
                <option value="subtr">-</option>
                <option value="mult">*</option>
                <option value="part">/</option>
            </select><br/>
            Enter second number: <input name="b"><br/>
            <input type="submit" name="submit" value="Calculate">
           
        </form>
        
        <?php
            if (isset($_GET['submit'])) {
                $a = $_GET['a'];
                $b = $_GET['b'];
                $operator = $_GET['operator'];
                $result = 0;
                
                if ($operator == "sum") {
                    $result = $a + $b;
                }
                if ($operator == "subtr") {
                    $result = $a - $b;
                }
                if ($operator == "mult") {
                    $result = $a * $b;
                }
                if ($operator == "part") {
                    $result = $a / $b;
                }
            ?>
            <p>Result = <?php echo $result; ?>  </p>
         
           <?php     
            }            
        ?>
    </body>
</html>
