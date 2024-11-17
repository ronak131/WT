<!DOCTYPE html>
<html>

<head>
    <title>Function</title>
</head>

<body>
    <h2>Function</h2>
    <?php
    function multiplication($x, $y = 10)
    { // function to print multiplication of a number upto given term
        for ($i = 1; $i < $y + 1; $i++) {
            echo $x . "x" . $i . "=" . $x * $i . "<br>";
        }
    }
    multiplication(20, 15);
    echo "<br>";
    multiplication(10); //default value will be used if y parameter is not used
    function sum($x, $y)
    {
        return ($x + $y);
    }
    echo "<br>170+1=" . sum(170, 1);
    ?>
</body>

</html>