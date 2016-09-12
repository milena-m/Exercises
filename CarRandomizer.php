<style>
    table, tr, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<form>
    Enter car brands, separted by comma: <input name="cars" />
    <input type="submit" name="submit" value="Show result" />
</form>

<?php
    if (isset($_GET["submit"])) {
        $cars = explode(", ", $_GET["cars"]);
        $colors = ["red", "blue", "metallic grey", "black", "yellow", "pink"];
        $quantity = [1, 2, 3, 4, 5, 6];   
            
       if (isset($_GET["cars"])) {   
           echo "You should buy:
               <table>
                    <tr>
                        <th>Car</th>
                        <th>Color</th>
                        <th>Count</th>
                    </tr>";
           
            foreach ($cars as $car) {
                echo "<tr>
                        <td>$car</td>";
                $randColor = array_rand($colors);  
                echo "   <td>$colors[$randColor]</td>";
                $randQuantity = array_rand($quantity);
                echo "   <td>$quantity[$randQuantity]</td>    
                      </tr>";
            }   
        } echo "</table>";
    }