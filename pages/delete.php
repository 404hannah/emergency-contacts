<?php
/* include 'connection.php';

if (isset($_GET['category']) && isset($_GET['institution'])) {
    $category = $_GET['category'];
    $institution = $_GET['institution'];

    switch ($category) {
        case "Fire Department":
            $table = "fire_departments";
            break;
        case "Government Organization":
            $table = "government_orgs";
            break;
        case "Hospital":
            $table = "hospitals";
            break;
        case "Non-Governmental Organization":
            $table = "non_government_orgs";
            break;
        case "Police Station":
            $table = "police_stations";
            break;
        default:
            echo "<script>alert('Invalid category!');</script>";
            header('Location: editor.php');
            exit();
    }

    $deleteQuery = "DELETE FROM $table WHERE Institution = ?";
    $stmt = $conn->prepare($deleteQuery);
    $stmt->bind_param("s", $institution);

    if ($stmt->execute()) {
        echo "<script>alert('Record deleted successfully!');</script>";
    } else {
        echo "<script>alert('Error deleting record: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();

    header('Location: editor.php');
} else {
    echo "<script>alert('Required data is missing!');</script>";
    header('Location: editor.php');
} */
?>