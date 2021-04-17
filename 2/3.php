<html lang="en">
<body>
<form action="3.php" method="post">

    <label>
        <tr>
            <td>Hotel reservation<br><br></td>
            <td>How many people ?* </td>
            <td><select name="people" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </td>
            <br>
        </tr>
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
            <td>What is your address ? </td>
            <td><input type="text" name="address" size="60"></td>
            <br>
        </tr>
        <tr>
            <td>What is your phone number ?* </td>
            <td><input type="text" name="phoneNumber" required></td>
            <br>
        </tr>
        <tr>
            <td>What is your email address ?* </td>
            <td><input type="email" name="emailAddress" required></td>
            <br>
        </tr>
        <tr>
            <td>Reservation since* </td>
            <td><input type="date" name="reservationSince" required></td>
            <br>
        </tr>
        <tr>
            <td>Reservation to* </td>
            <td><input type="date" name="reservationTo" required></td>
            <br>
        </tr>
        <tr>
            <td>Time of arrival </td>
            <td><input type="time" name="arrival"></td>
            <br>
            <br>
        </tr>
        <tr>
            <td>Optional accessories: <br></td>
            <td>Additional bed for a child</td>
            <td><input type="checkbox" name="bed"></td>
            <br>
        </tr>
        <tr>
            <td>Air conditioning</td>
            <td><input type="checkbox" name="airConditioning"></td>
            <br>
        </tr>
        <tr>
            <td>Fridge</td>
            <td><input type="checkbox" name="fridge"></td>
            <br>
        </tr>
        <tr>
            <td>Ashtray</td>
            <td><input type="checkbox" name="ashtray"></td>
            <br>
        </tr>
        <tr>
            <td><input type="submit" value="SEND"/></td>
        </tr>
    </label>
</form>

<?php
if (isset($_POST["people"]) && isset($_POST["name"]) && isset($_POST["lastName"]) &&
    isset($_POST["phoneNumber"]) && isset($_POST["reservationSince"]) && isset($_POST["reservationTo"])) {
    $people = $_POST["people"];
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $address = $_POST["address"];
    $phoneNumber = $_POST["phoneNumber"];
    $emailAddress = $_POST["emailAddress"];
    $reservationSince = $_POST["reservationSince"];
    $reservationTo = $_POST["reservationTo"];
    $arrival = $_POST["arrival"];

    if ($people > 1) {
        for ($i = 2; $i <= $people; $i++) {
            echo('<form action="3.php" method="post">
                    <label><fieldset><tr>
                                <td>What is your name ?* </td>
                                <td><input type="text" name="name$i" required></td>
                            <br>
                            </tr>
                            <tr>
                                <td>What is your lastname ?* </td>
                                <td><input type="text" name="lastName$i" required></td>
                            <br>
                            </tr>
                            <tr>
                                <td><input type="submit" value="SEND"/></td>
                            </tr>
                            </fieldset>
                            </label>
                    </form>');
        }
    }

    echo($people . "<br>" .
        $name . "<br>" .
        $lastName . "<br>" .
        $address . "<br>" .
        $phoneNumber . "<br>" .
        $emailAddress . "<br>" .
        $reservationSince . "<br>" .
        $reservationTo . "<br>" .
        $arrival . "<br><br>"
    );

    if (isset($_POST["name2"]) && isset($_POST["lastName2"])) {
        $name2 = $_POST["name2"];
        $lastName2 = $_POST["lastName2"];
        echo ($name2 . "<br>" .
              $lastName2 . "<br>" . "<br>");
    }
    if (isset($_POST["name3"]) && isset($_POST["lastName3"])) {
        $name3 = $_POST["name3"];
        $lastName3 = $_POST["lastName3"];
        echo ($name3 . "<br>" .
            $lastName3 . "<br>" . "<br>");
    }
    if (isset($_POST["name4"]) && isset($_POST["lastName4"])) {
        $name4 = $_POST["name4"];
        $lastName4 = $_POST["lastName4"];
        echo ($name4 . "<br>" .
            $lastName4 . "<br>" . "<br>");
    }

    if (isset($_POST["bed"])) {
        echo "+Bed" . "<br>";
    }
    if (isset($_POST["airConditioning"])) {
        echo "+Air conditioning" . "<br>";
    }
    if (isset($_POST["fridge"])) {
        echo "+Fridge" . "<br>";
    }
    if (isset($_POST["ashtray"])) {
        echo "+Ashtray" . "<br>";
    }
}
?>

</body>
</html>
