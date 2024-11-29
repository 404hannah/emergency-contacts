<?php 
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Home</title>
        
        <link rel="stylesheet" href="../styles/header.css">
        <link rel="stylesheet" href="../styles/index.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    </head>

    <body>
        <header class="header-left">
            <a href="index.html">TARLAC EMERGENCY CONTACTS</a>
        </header>
        <header class="header-right">
            <div class="search-bar">
                <input type="text" class="search-textbox">
                <i class='bx bx-search bx-md' onclick="search()"></i>
                <?php
                    echo "<script src='../scripts/search.js'></script>";

                    if (isset($_GET['search'])) {
                        $search = $_GET['search'];

                        $fetch_fire = mysqli_query($conn, "SELECT * FROM fire_departments WHERE Institution LIKE '%$search%'");
                        
                        $fetch_gov = mysqli_query($conn, "SELECT * FROM government_orgs WHERE Institution LIKE '%$search%'");

                        $fetch_hospitals = mysqli_query($conn, "SELECT * FROM hospitals WHERE Institution LIKE '%$search%'");

                        // $fetch_ngos = mysqli_query($conn, "SELECT * FROM non_government_orgs WHERE Institution LIKE '%$search%'");

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
            </div>
            <a href="about.html">ABOUT</a>
            <div class="switch-mode" onclick="switchMode()">
                <i class='bx bxs-moon bx-lg' id="bx-mode"></i>
            </div>
        </header>

        <section class="menu-wrapper">
            <div class="menu">
                <p>MUNICPALITIES<p>
                <a>TARLAC CITY</a>
                <a>ANAO</a>
                <a>BAMBAN</a>
                <a>CAMILING</a>
                <a>CAPAS</a>
                <a>CONCEPCION</a>
                <a>GERONA</a>
                <a>LA PAZ</a>
                <a>MAYANTOC</a>
                <a>MONCADA</a>
                <a>PANIQUI</a>
                <a>PURA</a>
                <a>RAMOS</a>
                <a>SAN CLEMENTE</a>
                <a>SAN JOSE</a>
                <a>SAN MANUEL</a>
                <a>SANTA IGNACIA</a>
                <a>VICTORIA</a>
            </div>
        </section>

        <div class="menu-button" onclick="menu()">
            <div class="div1"></div>
            <div class="div2"></div>
        </div>

        <div class="print-hover">
            <img src="../icons/info.png" alt="Information icon" width="30" height="30">
            Download an Offline Version of this Site
            <div class="print" onmouseover="printHover()" onmouseout="printHoverOut()">
                <img src="../icons/Printer.png" alt="Print icon" width="30" height="30">
            </div>
        </div>

        <div class="user-report-hover">
            <img src="../icons/info.png" alt="Information icon" width="30" height="30">
            Report an Issue about the Website
            <a class="user-report" onmouseover="reportHover()" onmouseout="reportHoverOut()" href="contact-us.html">
                <img src="../icons/User-Report.png" alt="User report icon" width="30" height="30">
            </a>
        </div>

        <script src="../scripts/index.js"></script>
        
    </body>
</html>