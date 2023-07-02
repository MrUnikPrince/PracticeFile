<?php
// Set up database connection
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'stuent form'; // Replace with your database name
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check for connection errors
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Insert data into database
    $sql = "INSERT INTO sform (name, email) VALUES ('$name', '$email')";
    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>

<!-- Display the form -->
<form method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <input type="submit" value="Submit">
</form>
