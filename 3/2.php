<html lang="en">
<body>
<form action="2.php" method="post">
    <label>
        <tr>
            <td>What is your name ?* </td>
            <td><input type="text" name="name" required></td>
            <br>
        </tr>
        <tr>
            <td>What is your lastname ?* </td>
            <td><input type="text" name="lastName" required></td>
            <br>
        </tr>
        <tr>
            <td><textarea name="comment" cols="50" rows="5">Your comment</textarea></td>
            <br>
        </tr>
        <tr>
            <td><input type="submit" value="Send"/></td>
        </tr>
    </label>
</form>

<?php
if (isset($_POST["name"]) && isset($_POST["lastName"])) {
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $comment = $_POST["comment"];

    if (file_put_contents('2.txt', $name."\n".$lastName."\n".$comment."\n", FILE_APPEND) === false) {
        echo "Error. Data not saved.";
    }
    else {
        echo "Thank you. Data saved.";
    }
}

?>
