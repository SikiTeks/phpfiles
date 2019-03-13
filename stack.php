
<html>
    <body>

        <form action="stack.php" method="POST">
            Find solution for ax^2 + bx + c<br>
            a: <input type="text" name="a"><br>
            b: <input type="text" name="b"><br>
            c: <input type="text" name="c"><br>
            <input type="submit" name="submit" value="Find x!">
        </form>
          
    </body>


</html>

<?php
    if(isset($_POST['a'])){ $a = $_POST['a']; } 
    if(isset($_POST['b'])){ $b = $_POST['b']; } 
    if(isset($_POST['c'])){ $c = $_POST['c']; }

    $d = $b*$b - 4*$a*$c;
    echo $d;
    echo "<br>";

    if($d < 0) {
        echo "The equation has no real solutions!";
    } elseif($d = 0) {
        echo "x = ";
        echo (-$b / 2*$a);
    } else  {
        echo "x1 = ";
        echo ((-$b + sqrt($d))/(2*$a));
        echo "<br>";
        echo "x2 = ";
        echo ((-$b - sqrt($d))/(2*$a));
    }
?>
