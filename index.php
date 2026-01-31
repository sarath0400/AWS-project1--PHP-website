<?php
$servername = "database-3.c0lqskssaqb8.us-east-1.rds.amazonaws.com";
$username   = "appuser";        // DB user
$password   = "App@12345";      // DB password
$database   = "appdb";          // DB name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

echo "<h2>Connected to RDS MySQL successfully</h2>";

// Fetch data
$sql = "SELECT * FROM test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h3>Data from Database:</h3>";
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " | Name: " . $row["name"] . "<br>";
    }
} else {
    echo "No data found";
}

$conn->close();
?>
