<?php
http_response_code(404);
include '../private/components/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
    <title>404 Error</title>

    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/404.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="icon" type="image/x-icon" href="../favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    $indexUrl = '../index.php';
    $aboutUrl = 'about.php';
    include '../private/components/header.php';
    ?>

    <section>
        <div class="msg">
            <h1>404 Error</h1>
            <h2>No web page found.</h2>
            <a class="back" href="../index.php">Go Back to Home Page</a>
            <div>
    </section>

    <script src='../scripts/search.js'></script>
</body>

</html>