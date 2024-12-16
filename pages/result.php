<?php 
    include 'connection.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Search Result</title>
        
        <link rel="stylesheet" href="../styles/header.css">
        <link rel="stylesheet" href="../styles/result.css">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <link rel="icon" type="image/x-icon" href="../images/tec-logo.png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    </head>

    <body>
        <header class="header-left">
            <a href="../index.php">TARLAC EMERGENCY CONTACTS</a>
        </header>
        <header class="header-right">
            <div class="search-bar">
                <input type="text" class="search-textbox" placeholder="Search institutions">
                <?php
                    if (!isset($_SESSION['search'])){
                        $_SESSION['search'] = $_GET['search'];
                    }
                    
                    if (isset($_GET['search'])) {
                        if ($_SESSION['search'] !== $_GET['search']) {
                            $_SESSION['search'] = $_GET['search'];
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
                    }
                ?>
                <i class='bx bx-search bx-md' id="search-icon" onclick="search()"></i>
            </div>
            <a href="about.php">ABOUT</a>
        </header>

        <section>
            <?php 
                if (isset($_GET['search'])) {
                    $search = $_GET['search'];

                    $counter = 0; 

                    $fetch_fire = mysqli_query($conn, "SELECT * FROM fire_departments WHERE Institution LIKE '%$search%'");
                    if (mysqli_num_rows($fetch_fire) > 0){
                        $counter = $counter + mysqli_num_rows($fetch_fire);
                    }

                    $fetch_gov = mysqli_query($conn, "SELECT * FROM government_orgs WHERE Institution LIKE '%$search%'");
                    if (mysqli_num_rows($fetch_gov) > 0){
                        $counter = $counter + mysqli_num_rows($fetch_gov);
                    }

                    $fetch_hospitals = mysqli_query($conn, "SELECT * FROM hospitals WHERE Institution LIKE '%$search%'");
                    if (mysqli_num_rows($fetch_hospitals) > 0){
                        $counter = $counter + mysqli_num_rows($fetch_hospitals);
                    }

                    $fetch_ngos = mysqli_query($conn, "SELECT * FROM non_government_orgs WHERE Institution LIKE '%$search%'");
                    if (mysqli_num_rows($fetch_ngos) > 0){
                        $counter = $counter + mysqli_num_rows($fetch_ngos);
                    }

                    $fetch_police = mysqli_query($conn, "SELECT * FROM police_stations WHERE Institution LIKE '%$search%'");
                    if (mysqli_num_rows($fetch_police) > 0){
                        $counter = $counter + mysqli_num_rows($fetch_police);
                    }
                }
            ?>
            <h2>Search Results for "<?php echo "$search"?>"</h2>
            <div class="results">
                <p>Found <?php echo "$counter"?> Result/s.</p>
                <div class="main-contents">
                    <?php                    
                        if (mysqli_num_rows($fetch_fire) > 0){
                            while($fetch_row = mysqli_fetch_assoc($fetch_fire)){ ?>
                                <div class="result">
                                    <div class="text">
                                        <h4><?php echo $fetch_row['Institution'] ?></h4>
                                        <h3><?php echo $fetch_row['Contact Information'] ?></h3>
                                    </div>
                                    <div class="icons">
                                        <a href="<?php echo $fetch_row['URL from Google Maps'] ?>"><img src="../icons/Location.png" alt="Location icon" width="30" height="30"></a>
                                        <a onclick="copyToClipboard('<?php echo $fetch_row['Contact Information'] ?>')"><img src="../icons/Copy.png" alt="Copy icon" width="30" height="30"></a>
                                    </div>
                                </div>
                            <?php }
                        }
                                        
                        if (mysqli_num_rows($fetch_gov) > 0){
                            $counter = $counter + mysqli_num_rows($fetch_gov);
                            while($fetch_row = mysqli_fetch_assoc($fetch_gov)){ ?>
                                <div class="result">
                                    <div class="text">
                                        <h4><?php echo $fetch_row['Institution'] ?></h4>
                                        <h3><?php echo $fetch_row['Contact Information'] ?></h3>
                                    </div>
                                    <div class="icons">
                                        <a href="<?php echo $fetch_row['URL from Google Maps'] ?>"><img src="../icons/Location.png" alt="Location icon" width="30" height="30"></a>
                                        <a onclick="copyToClipboard('<?php echo $fetch_row['Contact Information'] ?>')"><img src="../icons/Copy.png" alt="Copy icon" width="30" height="30"></a>
                                    </div>
                                </div>
                            <?php }
                        }
                                        
                        if (mysqli_num_rows($fetch_hospitals) > 0){
                            $counter = $counter + mysqli_num_rows($fetch_hospitals);
                            while($fetch_row = mysqli_fetch_assoc($fetch_hospitals)){ ?>
                                <div class="result">
                                    <div class="text">
                                        <h4><?php echo $fetch_row['Institution'] ?></h4>
                                        <h3><?php echo $fetch_row['Contact Information'] ?></h3>
                                    </div>
                                    <div class="icons">
                                        <a href="<?php echo $fetch_row['URL from Google Maps'] ?>"><img src="../icons/Location.png" alt="Location icon" width="30" height="30"></a>
                                        <a onclick="copyToClipboard('<?php echo $fetch_row['Contact Information'] ?>')"><img src="../icons/Copy.png" alt="Copy icon" width="30" height="30"></a>
                                    </div>
                                </div>
                            <?php }
                        }
            
                        if (mysqli_num_rows($fetch_ngos) > 0){
                            $counter = $counter + mysqli_num_rows($fetch_ngos);
                            while($fetch_row = mysqli_fetch_assoc($fetch_ngos)){ ?>
                                <div class="result">
                                    <div class="text">
                                        <h4><?php echo $fetch_row['Institution'] ?></h4>
                                        <h3><?php echo $fetch_row['Contact Information'] ?></h3>
                                    </div>
                                    <div class="icons">
                                        <a href="<?php echo $fetch_row['URL from Google Maps'] ?>"><img src="../icons/Location.png" alt="Location icon" width="30" height="30"></a>
                                        <a onclick="copyToClipboard('<?php echo $fetch_row['Contact Information'] ?>')"><img src="../icons/Copy.png" alt="Copy icon" width="30" height="30"></a>
                                    </div>
                                </div>
                            <?php }
                        }
                                        
                        if (mysqli_num_rows($fetch_police) > 0){
                            $counter = $counter + mysqli_num_rows($fetch_police);
                            while($fetch_row = mysqli_fetch_assoc($fetch_police)){ ?>
                                <div class="result">
                                    <div class="text">
                                        <h4><?php echo $fetch_row['Institution'] ?></h4>
                                        <h3><?php echo $fetch_row['Contact Information'] ?></h3>
                                    </div>
                                    <div class="icons">
                                        <a href="<?php echo $fetch_row['URL from Google Maps'] ?>"><img src="../icons/Location.png" alt="Location icon" width="30" height="30"></a>
                                        <a onclick="copyToClipboard('<?php echo $fetch_row['Contact Information'] ?>')"><img src="../icons/Copy.png" alt="Copy icon" width="30" height="30"></a>
                                    </div>
                                </div>
                            <?php }
                        }
                        ?>
                </div>
                <div class="user-report-hover">
                    <div class="pop-up">
                        <img src="../icons/info.png" alt="Information icon" width="30" height="30">
                        Something's Missing? Report it Here.
                    </div>
                    <a class="user-report" onmouseover="reportHover()" onmouseout="reportHoverOut()" href="contact-us.php">
                        <img src="../icons/User-Report.png" alt="User report icon" width="30" height="30">
                    </a>
                </div>
            </div>
        </section>
        
        <script src="../scripts/report-hover.js"></script>
        <script src='../scripts/index.js'></script>
        <script src='../scripts/search.js'></script>
    </body>
</html>