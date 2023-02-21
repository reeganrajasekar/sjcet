<?php 

require("../layout/db.php");
$id = $_POST['id'];
$sql = "DELETE FROM club WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    unlink("../../../static/uploads/placement/".$_POST['file']);
    header("Location: /co_curricular/admin/rc.php?page=1&msg=Img deleted Successfully !");
    die();
} else {
    echo "Error: " . $sql . "<br>";
}

$conn->close();

?>