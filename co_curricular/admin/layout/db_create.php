<?php 
require("./db.php");

// 
$sql = "CREATE TABLE club (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    file VARCHAR(500) NOT NULL,
    name VARCHAR(125) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table sub created successfully<br>";
} else {
    echo "Error creating table: ";
}

?>