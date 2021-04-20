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

    $data = array($people, $name, $lastName, $address, $phoneNumber, $emailAddress, $reservationSince, $reservationTo, $arrival);

    if (!$fp = fopen('3.csv', 'a')) {
        echo "Can not open 3.csv file";
    } else {
        fputcsv($fp, $data);
        fclose($fp);
    }
}
?>

<form action="3.php" method="post">
    <label>
        <tr>
            <br><br>
            <td>Show results</td>
            <td><input type="checkbox" name="results"></td>
            <br>
            <td><input type="submit" value="Send"/></td>
        </tr>
    </label>
</form>

<?php
if (isset($_POST["results"])) {
    if (($handle = fopen("3.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            echo "<br />";
            for ($i = 0; $i < $num; $i++) {
                echo $data[$i] . "<br />\n";
            }
        }
        fclose($handle);
    }
}
?>

</body>
</html>
