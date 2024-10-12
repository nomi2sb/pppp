<?php
include 'db.php'; // Database connection include karein

// SQL Query to fetch data
$sql = "SELECT * FROM games";
$result = $conn->query($sql);

// Check if records exist
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Description</th>
                <th>Link</th>
            </tr>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["title"]. "</td>
                <td><img src='" . $row["image"]. "' alt='Game Image' width='100'></td>
                <td>" . $row["description"]. "</td>
                <td><a href='" . $row["link"]. "'>Play Now</a></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Connection Band Karein
$conn->close();
?>
