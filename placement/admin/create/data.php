<?php  
require("../layout/db.php");

$name = $_POST["name"];
$year = $_POST["year"];
$dept = $_POST["dept"];
$com = $_POST["company"];
$position = $_POST["position"];

$sql = "INSERT INTO placement (name,year,dept,com,position)
VALUES ('$name','$year','$dept','$com','$position')";

if ($conn->query($sql) === TRUE) {
    header("Location: /placement/admin/records.php?page=1&msg=Placement Record added Successfully !");
    die();
} else {
    echo "Error: " . $sql . "<br>";
}

$conn->close();


?>