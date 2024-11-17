<!DOCTYPE html>
<html>

<head>
    <title>Strings</title>
</head>

<body>
    <h1>Strings</h1>
    <?php
    $text = "Hello World!";
    echo $text;
    echo "<h2>String Funcions</h2>";
    echo "1. Length of the string: " . strlen($text) . "<br>";
    echo "2. Word Count: " . str_word_count(($text)) . "<br>";
    echo "3. Reverse of a String: " . strrev(($text)) . "<br>";
    echo "4. Search 'World' : " . strpos($text, 'World') . "<br>";
    echo "5. Replacing 'World' with 'Ronak' : " . str_replace('World', 'Ronak', $text) . "<br>";
    ?>
</body>

</html>