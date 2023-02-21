<?php 

require("../layout/db.php");
$id = $_POST['id'];
$sql = "DELETE FROM placement WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: /placement/admin/records.php?page=1&msg=Record deleted Successfully !");
    die();
} else {
    echo "Error: " . $sql . "<br>";
}

$conn->close();

?>