<?php 
require("./db.php");

// 
$sql = "CREATE TABLE  IF NOT EXISTS club (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    file VARCHAR(500) NOT NULL,
    name VARCHAR(125) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table club created successfully<br>";
} else {
    echo "Error creating table: ";
}

$sql = "CREATE TABLE  IF NOT EXISTS placement (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    dept VARCHAR(125) NOT NULL,
    com VARCHAR(125) NOT NULL,
    position VARCHAR(125) NOT NULL,
    year VARCHAR(125) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table placement created successfully<br>";
} else {
    echo "Error creating table: ";
}

?>