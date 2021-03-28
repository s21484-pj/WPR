<html lang="en">
<body>
<form action="2.php" method="post">
    <label>
        <tr>
            <td>First number</td>
            <td><input name="a"/></td>
            <br>
        </tr
        <tr>
            <td>Second number</td>
            <td><input name="b"/></td>
            <br>
        </tr>
        <tr>
            <td><input type="submit" value="SEND"/></td>
        </tr>
    </label>
</form>

<?php
if (isset($_POST["a"]) && isset($_POST["b"])) {
    echo ($_POST["a"]) * ($_POST["b"]);
}
?>
</body>
</html>

