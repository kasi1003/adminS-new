<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "htdb";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Example query to retrieve data, modify as needed
$sql = "SELECT * FROM cemeteries";
$result = $conn->query($sql);

// Display data in a table
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Cemetery Name</th><th>Region</th><th>Town</th><th>Number of Sections</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['CemeteryName'] . "</td>";
        echo "<td>" . $row['Region'] . "</td>";
        echo "<td>" . $row['Town'] . "</td>";
        echo "<td>" . $row['NumberOfSections'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

// Close the database connection
$conn->close();
?>
