<?php
// $servername = "mysql.ripaim.markmarzeotti.com";
// $username = "ripaimmarkmarzeo";
// $password = "stephhasstinkyfeet9189";
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "digobrandsripaim";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
