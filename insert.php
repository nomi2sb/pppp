<?php
include 'db.php'; // Database connection include karein

// Data to be inserted
$title = "Sample Game Title"; // Aap yahan game ka title daal sakte hain
$image = "images/company_icon.png"; // Image ka path (yahan image ka actual path hona chahiye)
$description = "This is a sample game description.";
$link = "https://poki.com/en/g/subway-surfers"; // Game ka link daalein

// SQL Insert Query
$sql = "INSERT INTO games (title, image, description, link) VALUES ('$title', '$image', '$description', '$link')";

// Query Execute Karein
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error; // Error message agar koi issue ho
}

// Connection Band Karein
$conn->close();
?>
