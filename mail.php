<?php
// Assuming you have a MySQL database connection established. Replace the placeholders with your actual database credentials.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // You can perform any necessary validation here before inserting into the database.

    // Prepare and bind the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        // Data inserted successfully
        echo "Form data successfully captured and inserted into the database.";
    } else {
        // Error in database insertion
        echo "Error: " . $conn->error;
    }

    // Close the prepared statement and the database connection
    $stmt->close();
    $conn->close();
}
?>






