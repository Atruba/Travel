<?php
$servername = "sql303.infinityfree.com"; // Replace with your server name
$username = "if0_36610014"; // Replace with your database username
$password = "GDpSjaAUGQ"; // Replace with your database password
$dbname = "if0_36610014_digitalbackpackers"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create a test table
$sql = "CREATE TABLE IF NOT EXISTS test_table (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    test_column VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table test_table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
