<?php
function calculateDiscriminant($a, $b, $c) {
    return ($b * $b) - (4 * $a * $c);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = floatval($_POST['a']);
    $b = floatval($_POST['b']);
    $c = floatval($_POST['c']);
   
    $discriminant = calculateDiscriminant($a, $b, $c);
    echo $discriminant;
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Discriminant of a quadratic equation</title>
</head>
<body>
    <form method="post">
        <label for="a">A</label>
        <input  name="a" required placeholder="Value of a here"><br>
        <label for="b">B</label>
        <input name="b" required placeholder="Value of b here"><br>
        <label for="c">C</label>
        <input name="c" required placeholder="Value of c here"><br>
       
        <input type="submit" value="Calculate">
    </form>
</body>
</html>
