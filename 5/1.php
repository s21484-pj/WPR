<?php
if ($db = mysqli_connect("localhost", "root", "root", "php", "3306")) {
    echo "<h4>Connected to database" . '</h4>';
} else {
    echo "<h4>Cant connect to database" . '</h4>';
}

$query = 'SELECT * FROM car';
if (!$result = mysqli_query($db, $query)) {
    mysqli_close($db);
    echo "Error";
}

echo '<br>';
echo "<h4>Result of mysqli_fetch_row: </h4>";
while ($row = mysqli_fetch_row($result)) {
    echo $row[0] . ' ';
    echo $row[1] . ' ';
    echo $row[2] . ' ';
    echo $row[3] . ' ';
    echo '<br>';
}
echo '<br>';


$query2 = "INSERT INTO car (mark, model, yearOfProduction) VALUES";
$query2 .= "('Ferrari', 'LaFerrari', 2016);";
if ($insert = mysqli_query($db, $query2)) {
    echo "<h4>Added new value to car table</h4>";
} else {
    echo "<h4>Cant insert new value</h4>";
}


$result2 = mysqli_query($db, "SELECT id, mark, model, yearOfProduction FROM car");

echo "<h4>Result of mysqli_fetch_array: </h4>";
echo "Id Mark Model YearOfProduction";
echo '<br>';
while ($xd = mysqli_fetch_array($result2,MYSQLI_BOTH)) {
    echo ($xd[0] . ' ' . $xd["mark"] . ' ' . $xd["model"] . ' ' . $xd["yearOfProduction"]);
    echo '<br>';
}

echo '<br>';
echo "<h4>Result of mysqli_num_rows: </h4>";
$result3 = mysqli_query($db, "SELECT id, mark FROM car");
$dx = mysqli_num_rows($result3);
printf("Table has %d rows.\n", $dx);
echo '<br>';
echo '<br>';

if (mysqli_close($db)) {
    echo "<h4>Database closed" . '</h4>';
} else {
    echo "<h4>Cant close database" . '</h4>';
}
