<?php 

require("../layout/db.php");
$id = $_POST['id'];
$sql = "DELETE FROM img WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    unlink("../../static/uploads/img/".$_POST['file']);
    header("Location: /admin/gallery.php?page=1&msg=Event deleted Successfully !");
    die();
} else {
    echo "Error: " . $sql . "<br>";
}

$conn->close();

?>