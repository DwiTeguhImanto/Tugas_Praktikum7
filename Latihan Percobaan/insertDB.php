<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connection Failed : " . mysqli_connect_error());
}

$sql = "INSERT INTO liga (kode, negara, champion)
VALUES ('Jer', 'Jerman', '4')";

if (mysqli_query($conn, $sql)) {
    echo "New record created succesfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>