<div style="background-color:blue; color:red">
<?php
    $num1= $_POST["num1"];
    $num2= $_POST["num2"];
    $num3= $_POST["num3"];
    function not($num1,$num2, $num3){
        $tot=$num1+$num2+$num3;
        return $tot;
        }
        echo "A nota total de Emengarda será: <br>";
        echo not ($num1, $num2, $num3);
       function som($num1,$num2, $num3){
        $med=($num1+$num2+$num3)/2;
        return $med;
        }         echo "<br>A media total de Emengarda será: <br>";
        echo som ($num1, $num2, $num3);
?> 
</div>