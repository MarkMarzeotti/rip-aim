<?php

$image = $_POST['image'];
$screenname = $_POST['screenname'];
file_put_contents('generated/' . $screenname . '.png', base64_decode($image));

// store in the db // not doing anymore as its actually less efficient
// include 'functions.php';
// include 'config.php';
//
// $sql = 'INSERT INTO `ripaim_generated_images` (`id`, `screenname`, `imagedata`, `datetime`) VALUES (NULL, \'' . $screenname . '\', \'' . $image . '\', CURRENT_TIMESTAMP)';
//
// if ($conn->query($sql) === TRUE) {
//     return;
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
//
// $conn->close();

?>
