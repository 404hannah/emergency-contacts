<?php
include 'connection.php';

ob_clean();

if (isset($_POST['municipality']) && isset($_POST['category'])) {
    $municipality = mysqli_real_escape_string($conn, $_POST['municipality']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);

    $query = "SELECT * FROM $category WHERE Municipality = '$municipality'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $records = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $records[] = $row;
        }
        echo json_encode($records);
    } else {
        echo json_encode([]);
    }
} else {
    echo json_encode(['error' => 'Missing municipality or category']);
}

mysqli_close($conn);
?>
