<?php
if (isset($_POST["a"]) && isset($_POST["b"])) {
    echo ($_POST["a"]) * ($_POST["b"]);
}
?>

<html>
<body>
<form action="2.php" method="post">
    <input name="a"/>
    <input name="b"/>
    <input type="submit"/>
</form>
</body>
</html>