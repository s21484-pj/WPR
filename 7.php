<html lang="en">
<body>
<form action="7.php" method="post">
    <label>
        <tr>
            <td>Enter a number</td>
            <td><input name="input"/></td>
            <br>
        </tr
        <tr>
            <td><input type="submit" value="SEND"/></td>
        </tr>
    </label>
</form>

<?php
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    switch ($input) {
        case 1:
            echo ("January 31days");
            break;
        case 2:
            echo ("February 28days");
            break;
        case 3:
            echo ("March 31days");
            break;
        case 4:
            echo ("April 30days");
            break;
        case 5:
            echo ("May 31days");
            break;
        case 6:
            echo ("June 30days");
            break;
        case 7:
            echo ("July 31days");
            break;
        case 8:
            echo ("August 31days");
            break;
        case 9:
            echo ("September 30days");
            break;
        case 10:
            echo ("October 31days");
            break;
        case 11:
            echo ("November 30days");
            break;
        case 12:
            echo ("December 31days");
            break;
        default:
            echo ("ERROR !");
    }
}
?>
</body>
</html>
