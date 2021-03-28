<html lang="en">
<body>
<form action="4.php" method="post">
    <label>
        <tr>
            <td>Enter a number: </td>
            <td><input type="number" name="input"/></td>
            <br>
        </tr
        <tr>
            <td><input type="submit" value="SEND"/></td>
        </tr>
    </label>
</form>

<?php
if (isset($_POST["input"])) {
    $input = (int)$_POST["input"];
    $sqrtInput = (int)sqrt($input);

    if (is_int($input) && $input > 1) {
        isPrimeNumber($input, $sqrtInput);
    } else {
        echo "wrong input";
    }
}


function isPrimeNumber($input, $sqrtInput) {
    $isPrimeNumber = true;
    $iterationCount = 0;

    for ($i = 2; $i <= $sqrtInput; $i++) {
        $iterationCount++;
        if ($input % $i == 0) {
            $isPrimeNumber = false;
            break;
        }
    }
    if ($isPrimeNumber) {
        echo "It is a prime number.<br>";
        echo "Loop iterations: $iterationCount";
    } else {
        echo "It is not a prime number.<br>";
        echo "Loop iterations: $iterationCount";
    }
}

?>
</body>
</html>
