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

        <script src='../scripts/search.js'></script>
    </head>

    <body>
        <header class="header-left">
            <a href="../index.php">TARLAC EMERGENCY CONTACTS</a>
        </header>
        <header class="header-right">
            <div class="search-bar">
                <input type="text" class="search-textbox" placeholder="Search institutions">
                <?php
                    if (isset($_GET['search'])) {
                        $search = $_GET['search'];

                        $fetch_fire = mysqli_query($conn, "SELECT * FROM fire_departments WHERE Institution LIKE '%$search%'");
                        
                        $fetch_gov = mysqli_query($conn, "SELECT * FROM government_orgs WHERE Institution LIKE '%$search%'");

                        $fetch_hospitals = mysqli_query($conn, "SELECT * FROM hospitals WHERE Institution LIKE '%$search%'");

                        $fetch_ngos = mysqli_query($conn, "SELECT * FROM non_government_orgs WHERE Institution LIKE '%$search%'");

                        $fetch_police = mysqli_query($conn, "SELECT * FROM police_stations WHERE Institution LIKE '%$search%'");

                        if (mysqli_num_rows($fetch_fire) > 0){
                            echo "<script> result(); </script>";
                        } elseif (mysqli_num_rows($fetch_gov) > 0){
                            echo "<script> result(); </script>";
                        } elseif (mysqli_num_rows($fetch_hospitals) > 0){
                            echo "<script> result(); </script>";
                        } elseif (mysqli_num_rows($fetch_ngos) > 0){
                            echo "<script> result(); </script>";
                        } elseif (mysqli_num_rows($fetch_police) > 0){
                            echo "<script> result(); </script>";
                        } else {
                            echo "<script> noResult(); </script>";   
                        }
                    }
                ?>
                <i class='bx bx-search bx-md' onclick="search()"></i>
            </div>
            <a href="about.php">ABOUT</a>
        </header>

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
    </body>
</html>