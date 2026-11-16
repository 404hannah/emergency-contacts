<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
    <title>About Us</title>

    <link rel="icon" type="image/x-icon" href="../images/tec-logo.png">

    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/about.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
        <h2>ABOUT US</h2>
        <div class="about-box">
            <div class="main-contents">
                <p>Disasters or tragedies in the form of storms, sickness, fires, crimes, and accidents among others are pervasive and other times, constant. Therefore efforts in emergency prevention and minimization of their impact are crucial. In emergency response, the less time taken in the process exponentially improves results.</p>

                <h4>Our Purpose</h4>
                <p class="p2">Emergencies can happen when we least expect them. Our goal is to ensure that everyone in Tarlac Province can quickly connect with critical services like:</p>
                <ul>
                    <li>Hospitals</li>
                    <li>Fire Stations</li>
                    <li>Police Stations</li>
                    <li>Government</li>
                    <li>Non-Governmental Organizations (NGOs) Or Others</li>
                </ul>
                <p class="log-in">Content Manager? Log In <a href="login.php">Here</a></p>
            </div>
            <div class="report-container">
                <a class="user-report" href="contact-us.php">
                    <img src="../icons/User-Report.png" alt="User report icon" width="30" height="30">
                    <p>CONTACT US</p>
                </a>
            </div>
        </div>
    </section>

    <script src='../scripts/search.js'></script>
</body>

</html>