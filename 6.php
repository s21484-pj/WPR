<html lang="en">
<body>
<form action="6.php" method="post">
    <label>
        <tr>
            <td>First side: </td>
            <td><input name="a"/></td>
            <br>
        </tr
        <tr>
            <td>Second side: </td>
            <td><input name="b"/></td>
            <br>
        </tr>
        <tr>
            <td>Third side: </td>
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
    $first = $_POST["a"];
    $second =  $_POST["b"];
    $third = $_POST["c"];
    if ($first + $second > $third && $first + $third > $second && $second + $third > $first) {
        echo ("It is possible to build a triangle from these sides.");
    } else {
        echo ("ERROR !");
    }
}
?>
</body>
</html>

