<html lang="en">
<body>
<form action="8.php" method="post">
    <label>
        <tr>
            <td>First number: </td>
            <td><input name="a"/></td>
            <br>
        </tr
        <tr>
            <td>Second number: </td>
            <td><input name="b"/></td>
            <br>
        </tr>
        <tr>
            <td>Third number: </td>
            <td><input name="c"/></td>
            <br>
        </tr>
        <tr>
            <td><input type="submit" value="SEND"/></td>
        </tr>
    </label>
</form>

<?php
if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])) {
    $a = $_POST["a"];
    $b =  $_POST["b"];
    $c = $_POST["c"];
    $smallestValue = 0;
    $mediumValue = 0;
    $largestValue = 0;
    if ($a == max($a, $b, $c)) {
        $largestValue = $a;
        $mediumValue = max($b, $c);
        $smallestValue = min($b, $c);
    } elseif ($b == max($a, $b, $c)) {
        $largestValue = $b;
        $mediumValue = max($a, $c);
        $smallestValue = min($a, $c);
    } elseif ($c == max($a, $b, $c)) {
        $largestValue = $c;
        $mediumValue = max($a, $b);
        $smallestValue = min($a, $b);
    }
    echo ($smallestValue . " " . $mediumValue . " " . $largestValue . "<br>");
    echo ($largestValue . " " . $mediumValue . " " . $smallestValue);
}
?>
</body>
</html>
