<?php 
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Search Result</title>
        
        <link rel="stylesheet" href="../styles/header.css">
        <link rel="stylesheet" href="../styles/result.css">
        
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    </head>

    <body>
        <header class="header-left">
            <a href="index.php">TARLAC EMERGENCY CONTACTS</a>
        </header>
        <header class="header-right">
            <div class="search-bar">
                <input type="text">
                <i class='bx bx-search bx-md'></i>
            </div>
            <a href="about.html">ABOUT</a>
            <div class="switch-mode"  onclick="switchMode()">
                <i class='bx bxs-moon bx-lg'></i>
            </div>
        </header>

        <section>
            <h2>Search Results for " "</h2>
            <div class="results">
                <p>Found 1 Result/s.</p>
                <div class="main-contents">
                    <?php
                    if (isset($_GET['search'])) {
                        $search = $_GET['search'];

                        $fetch_results = mysqli_query($conn, "SELECT * FROM fire_departments WHERE Institution LIKE '%$search%'");
                                        
                        if (mysqli_num_rows($fetch_results) > 0){
                            while($fetch_row = mysqli_fetch_assoc($fetch_results)){ ?>
                                <div class="result">
                                    <div class="text">
                                        <h4><?php echo $fetch_row['Institution'] ?></h4>
                                        <h3><?php echo $fetch_row['Contact Information'] ?></h3>
                                    </div>
                                    <div class="icons">
                                        <a href="<?php echo $fetch_row['URL from Google Maps'] ?>"><img src="../icons/Location.png" alt="Location icon" width="30" height="30"></a>
                                        <a href="<?php echo $fetch_row['Contact Information'] ?>"><img src="../icons/Copy.png" alt="Copy icon" width="30" height="30"></a>
                                        <a href="<?php echo $fetch_row['Contact Information'] ?>"><img src="../icons/Call.png" alt="Call icon" width="30" height="30"></a>
                                    </div>
                                </div>
                            <?php }
                        }

                        $fetch_results = mysqli_query($conn, "SELECT * FROM government_orgs WHERE Institution LIKE '%$search%'");
                                        
                        if (mysqli_num_rows($fetch_results) > 0){
                            while($fetch_row = mysqli_fetch_assoc($fetch_results)){ ?>
                                <div class="result">
                                    <div class="text">
                                        <h4><?php echo $fetch_row['Institution'] ?></h4>
                                        <h3><?php echo $fetch_row['Contact Information'] ?></h3>
                                    </div>
                                    <div class="icons">
                                        <a href="<?php echo $fetch_row['URL from Google Maps'] ?>"><img src="../icons/Location.png" alt="Location icon" width="30" height="30"></a>
                                        <a href="<?php echo $fetch_row['Contact Information'] ?>"><img src="../icons/Copy.png" alt="Copy icon" width="30" height="30"></a>
                                        <a href="<?php echo $fetch_row['Contact Information'] ?>"><img src="../icons/Call.png" alt="Call icon" width="30" height="30"></a>
                                    </div>
                                </div>
                            <?php }
                        }

                        $fetch_results = mysqli_query($conn, "SELECT * FROM hospitals WHERE Institution LIKE '%$search%'");
                                        
                        if (mysqli_num_rows($fetch_results) > 0){
                            while($fetch_row = mysqli_fetch_assoc($fetch_results)){ ?>
                                <div class="result">
                                    <div class="text">
                                        <h4><?php echo $fetch_row['Institution'] ?></h4>
                                        <h3><?php echo $fetch_row['Contact Information'] ?></h3>
                                    </div>
                                    <div class="icons">
                                        <a href="<?php echo $fetch_row['URL from Google Maps'] ?>"><img src="../icons/Location.png" alt="Location icon" width="30" height="30"></a>
                                        <a href="<?php echo $fetch_row['Contact Information'] ?>"><img src="../icons/Copy.png" alt="Copy icon" width="30" height="30"></a>
                                        <a href="<?php echo $fetch_row['Contact Information'] ?>"><img src="../icons/Call.png" alt="Call icon" width="30" height="30"></a>
                                    </div>
                                </div>
                            <?php }
                        }

                        /* $fetch_results = mysqli_query($conn, "SELECT * FROM non_government_orgs WHERE Institution LIKE '%$search%'");
                                        
                        if (mysqli_num_rows($fetch_results) > 0){
                            while($fetch_row = mysqli_fetch_assoc($fetch_results)){ ?>
                                <div class="result">
                                    <div class="text">
                                        <h4><?php echo $fetch_row['Institution'] ?></h4>
                                        <h3><?php echo $fetch_row['Contact Information'] ?></h3>
                                    </div>
                                    <div class="icons">
                                        <a href="<?php echo $fetch_row['URL from Google Maps'] ?>"><img src="../icons/Location.png" alt="Location icon" width="30" height="30"></a>
                                        <a href="<?php echo $fetch_row['Contact Information'] ?>"><img src="../icons/Copy.png" alt="Copy icon" width="30" height="30"></a>
                                        <a href="<?php echo $fetch_row['Contact Information'] ?>"><img src="../icons/Call.png" alt="Call icon" width="30" height="30"></a>
                                    </div>
                                </div>
                            <?php }
                        } */

                        $fetch_results = mysqli_query($conn, "SELECT * FROM police_stations WHERE Institution LIKE '%$search%'");
                                        
                        if (mysqli_num_rows($fetch_results) > 0){
                            while($fetch_row = mysqli_fetch_assoc($fetch_results)){ ?>
                                <div class="result">
                                    <div class="text">
                                        <h4><?php echo $fetch_row['Institution'] ?></h4>
                                        <h3><?php echo $fetch_row['Contact Information'] ?></h3>
                                    </div>
                                    <div class="icons">
                                        <a href="<?php echo $fetch_row['URL from Google Maps'] ?>"><img src="../icons/Location.png" alt="Location icon" width="30" height="30"></a>
                                        <a href="<?php echo $fetch_row['Contact Information'] ?>"><img src="../icons/Copy.png" alt="Copy icon" width="30" height="30"></a>
                                        <a href="<?php echo $fetch_row['Contact Information'] ?>"><img src="../icons/Call.png" alt="Call icon" width="30" height="30"></a>
                                    </div>
                                </div>
                            <?php }
                        }
                    } ?>
                </div>
                <div class="user-report-hover">
                    <div class="pop-up">
                        <img src="../icons/info.png" alt="Information icon" width="30" height="30">
                        Something's Missing? Report it Here.
                    </div>
                    <div class="user-report" onmouseover="reportHover()" onmouseout="reportHoverOut()">
                        <img src="../icons/User-Report.png" alt="User report icon" width="30" height="30">
                    </div>
                </div>
            </div>
        </section>
        
    </body>
</html>