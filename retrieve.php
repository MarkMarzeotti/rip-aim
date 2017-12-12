<?php
include 'config.php';
$sql = "SELECT * FROM `ripaim_generated_images` WHERE screenname = '" . $screenname . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<img src="data:image/png;base64,' . $row["imagedata"] . '" alt="' . $row["screenname"] . '" />';
    }
} else {
    echo "0 results";
}
$conn->close();

?>
