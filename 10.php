<html lang="en">
<body>
<form action="10.php" method="post">
    <label>
        <tr>
            <td>Enter a number: </td>
            <td><input name="a"/></td>
            <br>
        </tr
        <tr>
            <td><input type="submit" value="SEND"/></td>
        </tr>
    </label>
</form>

<?php
if (isset($_POST["a"])) {
    $n = $_POST["a"];
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($j <= $i) {
                echo ("*");
            }
        }
        echo ("<br>");
    }
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($j >= $i) {
                echo ("*");
            }
        }
        echo ("<br>");
    }
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($j >= $i) {
                echo ("*");
            } else {
                echo '&nbsp';
            }
        }
        echo ("<br>");
    }
    for ($i = 0; $i < $n; $i++) {
        for ($j = $n - 1; $j >= 0; $j--) {
            if ($j > $i) {
                echo '&nbsp';
            } else {
                echo ("*");
            }
        }
        echo ("<br>");
    }
}
?>
</body>
</html>
