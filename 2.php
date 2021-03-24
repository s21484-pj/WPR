<?php
if (isset($_POST["a"]) && isset($_POST["b"])) {
    echo ($_POST["a"]) * ($_POST["b"]);
}
?>

<html lang="en">
<body>
<form action="2.php" method="post">
    <label>
        <input name="a"/>
    </label>
    <label>
        <input name="b"/>
    </label>
    <input type="submit"/>
</form>
</body>
</html>
