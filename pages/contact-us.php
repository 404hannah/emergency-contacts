<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/contact-us.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="icon" type="image/x-icon" href="../images/tec-logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    $indexUrl = '../index.php';
    include './components/header.php';
    ?>

    <section>
        <div class="text-above">
            <h1>CONTACT US</h1>
            <p>Thank you for reaching out! Please provide details about the issue you're experiencing so we can assist you promptly.</p>
        </div>

        <form action="mailto:tarlacemergencycontacts@gmail.com" method="post" enctype="text/plain">
            <p class="email-text">Email Address:</p>
            <input type="text" class="email">
            <p>Subject:</p>
            <input type="text" class="subject" name="subject">
            <p>Description of the Problem:</p>
            <textarea class="description" name="body" rows="6" cols="80"></textarea>
            <div><input type="submit" class="submit" value="Submit"></div>
        </form>
    </section>

    <script src='../scripts/search.js'></script>
</body>

</html>