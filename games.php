<?php
include 'db.php'; // Database connection

$sql = "SELECT * FROM games"; // Assuming you have a games table
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<article class='game'>";
        echo "<h2>" . $row["title"] . "</h2>";
        echo "<img src='" . $row["image"] . "' alt='Game Image'>";
        echo "<p>" . $row["description"] . "</p>";
        echo "<a href='" . $row["link"] . "'>Khelen</a>";
        echo "</article>";
    }
} else {
    echo "Koi games nahi hain.";
}
$conn->close();
?>
