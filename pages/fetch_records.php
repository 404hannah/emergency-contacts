<?php
include 'connection.php';

// Ensure no extra output is generated
ob_clean();  // Clears any unwanted output before starting the response

// Check if the necessary POST data is present
if (isset($_POST['municipality']) && isset($_POST['category'])) {
    $municipality = mysqli_real_escape_string($conn, $_POST['municipality']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);

    // Query to fetch data based on municipality and category
    $query = "SELECT * FROM $category WHERE Municipality = '$municipality'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $records = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $records[] = $row;
        }
        // Return the records as a JSON response
        echo json_encode($records);
    } else {
        // If no records found, return an empty array
        echo json_encode([]);
    }
} else {
    // Return error if data is missing
    echo json_encode(['error' => 'Missing municipality or category']);
}

mysqli_close($conn);
?>
