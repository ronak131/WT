<!DOCTYPE html>
<html>

<head>
    <title>Conditional Statements</title>
</head>

<body>
    <h1>Conditional Statements in php</h1>

    <ol>
        <li>
            <h2>if .. else if .. else .. </h2>
        </li>
        <?php
        $age = 19;
        if ($age >= 21) {
            echo "you are ready for all driving license";
        } //only if
        else if (($age >= 18) && ($age < 21)) {
            echo "you can only apply for two wheeler non-gear license.";
        } // if .. else if
        else if (($age >= 16) && ($age < 18)) {
            echo "you can apple for learning license only for two-wheeler non-gear";
        } else {
            echo "you are underaged for applying for license";
        } // if .. else if .. else ..
        ?>
        <li>
            <h2>Switch</h2>
        </li>
        <?php
        $hour = date("H");
        switch ($hour) {
            case 6:
                echo "Good Morning";
                break;
            case 12:
                echo "Good Afternoon";
                break;
            case 15:
                echo "Good Evening";
                break;
            case 8:
                echo "Good night";
                break;
        }
        ?>
    </ol>

</body>

</html>