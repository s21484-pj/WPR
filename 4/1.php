<html lang="en">
<body>
<form action="1.php" method="post">
    <h4>Hotel reservation</h4>
    <fieldset>
    <label>
        <tr>
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
    </label>
    </fieldset>
    <h4>Fill if there are more people</h4>
    <fieldset>
        <label>
            <tr>
                <td>What is your name ? </td>
                <td><input type="text" name="name2"></td>
                <br>
            </tr>
            <tr>
                <td>What is your lastname ? </td>
                <td><input type="text" name="lastName2"</td>
                <br>
            </tr>
        </label>
    </fieldset>
    <br>
    <fieldset>
        <label>
            <tr>
                <td>What is your name ? </td>
                <td><input type="text" name="name3"></td>
                <br>
            </tr>
            <tr>
                <td>What is your lastname ? </td>
                <td><input type="text" name="lastName3"></td>
                <br>
            </tr>
        </label>
    </fieldset>
    <br>
    <fieldset>
        <label>
            <tr>
                <td>What is your name ? </td>
                <td><input type="text" name="name4"></td>
                <br>
            </tr>
            <tr>
                <td>What is your lastname ? </td>
                <td><input type="text" name="lastName4"></td>
                <br>
            </tr>
        </label>
    </fieldset>
    <br>
        <tr>
            <td><input type="submit" value="SEND"/></td>
        </tr>
</form>

<?php
session_start();
if (isset($_POST["people"]) && isset($_POST["name"]) && isset($_POST["lastName"]) &&
    isset($_POST["phoneNumber"]) && isset($_POST["reservationSince"]) && isset($_POST["reservationTo"])) {
    $people = $_POST["people"];
    setcookie("people", $people, time()+60*60*24*7);
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $address = $_POST["address"];
    $phoneNumber = $_POST["phoneNumber"];
    $emailAddress = $_POST["emailAddress"];
    $reservationSince = $_POST["reservationSince"];
    $reservationTo = $_POST["reservationTo"];
    $arrival = $_POST["arrival"];

    echo('People: '. $people . "<br>" .
        '<h4>First person</h4>' .
        $name . "<br>" .
        $lastName . "<br>" .
        $address . "<br>" .
        $phoneNumber . "<br>" .
        $emailAddress . "<br>" .
        $reservationSince . "<br>" .
        $reservationTo . "<br>" .
        $arrival . "<br><br>"
    );

    if ($people > 1) {
        if (isset($_POST["name2"]) && isset($_POST["lastName2"])) {
            $name2 = $_POST["name2"];
            $lastName2 = $_POST["lastName2"];
            echo ('<h4>Second person</h4>' .
                $name2 . "<br>" .
                $lastName2 . "<br>" . "<br>");
        }
    }

    if ($people > 2) {
        if (isset($_POST["name3"]) && isset($_POST["lastName3"])) {
            $name3 = $_POST["name3"];
            $lastName3 = $_POST["lastName3"];
            echo ('<h4>Third person</h4>' .
                $name3 . "<br>" .
                $lastName3 . "<br>" . "<br>");
        }
    }

    if ($people > 3) {
        if (isset($_POST["name4"]) && isset($_POST["lastName4"])) {
            $name4 = $_POST["name4"];
            $lastName4 = $_POST["lastName4"];
            echo ('<h4>Fourth person</h4>' .
                $name4 . "<br>" .
                $lastName4 . "<br>" . "<br>");
        }
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
session_destroy();
?>

</body>
</html>
