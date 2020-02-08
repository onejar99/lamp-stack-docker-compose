
<?php
//$servername = "172.17.0.8";
$servername = "mysql";
$username = "root";
$password = "root1234";
$dbname = "information_schema";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SHOW DATABASES;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //print_r($row);
        echo $row['Database']."<br/>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

