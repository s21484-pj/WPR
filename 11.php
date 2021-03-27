<html lang="en">
<body>
<form action="11.php" method="post">
    <label>
        <tr>
            <td>Enter a string: </td>
            <td><input type="text" name="a"/></td>
            <br>
        </tr
        <tr>
            <td><input type="submit" value="SEND"/></td>
        </tr>
    </label>
</form>

<?php
if (isset($_POST["a"])) {
    $string = $_POST["a"];
    $string = strtolower($string);
    $alphabet = array("abcdefghijlkmnopqrstuvwxyz");
    $copyOfAlphabet = array("abcdefghijlkmnopqrstuvwxyz");

    for ($i = 0; $i < strlen($string); $i++) {
        $temp = $string[$i];
        for ($j = 0; $j < sizeof($alphabet); $j++) {
            if ($temp == $copyOfAlphabet[$j]) {
                unset($alphabet[$j]);
            }
        }
    }

    if (empty($alphabet)) {
        echo "true";
    } else {
        echo "false";
    }
}
?>
</body>
</html>
