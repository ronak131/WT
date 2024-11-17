<!DOCTYPE html>
<html>

<head>
    <title>Flow Controls</title>
</head>

<body>
    <h1>Flow Controls</h1>
    <ol>
        <li>
            <h2>While</h2>
        </li>
        <?php
        $x = 0;
        while ($x <= 5) { // Print until x becomes equal to 5
            echo "the number is " . $x . "<br>";
            $x++;
        }
        ?>
        <li>
            <h2>do .. while ..</h2>
        </li>
        <?php
        $x = 5;
        do { // first print the number and check the condition
            echo "the number is " . $x;
            $x++;
        } while ($x < 5);
        ?>
        <li>
            <h2>For</h2>
        </li>
        <?php
        $x = 25; //print multiplication table of 25
        for ($i = 0; $i < 11; $i++) {
            echo $x . "x" . $i . "=" . $x * $i . "<br>";
        }
        ?>
        <li>
            <h2>For each</h2>
        </li>
        <?php
        $fruits = ["Banana", "Apple", "Mango", "Orange"];
        foreach ($fruits as $fruit) { // print elements of an array
            echo $fruit . "<br>";
        }
        ?>
    </ol>
</body>

</html>