<html lang="en">
<body>
<form action="1.php" method="post">
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
            <td>Choose action: </td>
            <td><select name="action">
                    <option value="+">Addition</option>
                    <option value="-">Subtraction</option>
                    <option value="*">Multiplication</option>
                    <option value="/">Division</option>
                </select>
            </td>
            <br>
        </tr>
        <tr>
            <td><input type="submit" value="SEND"/></td>
        </tr>
    </label>
</form>

<?php
if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["action"])) {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $action = $_POST["action"];
    switch ($action) {
        case "+": {
            echo $a + $b;
            break;
        }
        case "-": {
            echo $a - $b;
            break;
        }
        case "*": {
            echo $a * $b;
            break;
        }
        case "/": {
            if ($b != 0) {
                echo $a / $b;
            } else {
                echo "Can not division by 0 !";
            }
            break;
        }
    }
}
?>
</body>
</html>
