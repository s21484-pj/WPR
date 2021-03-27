<html lang="en">
<body>
<form action="5.php" method="post">
    <label>
        <tr>
            <td>First string: </td>
            <td><input type="text" name="firstString"/></td>
            <br>
        </tr
        <tr>
            <td>Second string: </td>
            <td><input type="text" name="secondString"/></td>
            <br>
        </tr>
        <tr>
            <td><input type="submit" value="SEND"/></td>
        </tr>
    </label>
</form>

<?php
$firstString = $_POST["firstString"];
$secondString = $_POST["secondString"];
echo ('"%' . $secondString . ' ' . $firstString . '%$#"');
?>
</body>
</html>

