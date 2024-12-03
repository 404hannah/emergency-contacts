<?php 
    include 'pages/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Home</title>
        
        <link rel="stylesheet" href="styles/header.css">
        <link rel="stylesheet" href="styles/index.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        
        <script src='scripts/search.js'></script>
    </head>

    <body>
        <header class="header-left">
            <a href="index.php">TARLAC EMERGENCY CONTACTS</a>
        </header>
        <header class="header-right">
            <div class="search-bar">
                <input type="text" class="search-textbox">
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

                    $query = "SELECT DISTINCT Municipality FROM government_orgs";
                    $result = mysqli_query($conn, $query);
                    $i = 0;
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                                $id[$i] = "#" . $row['Municipality'];
                                $i = $i + 1;
                        }
                    } else {
                        echo '<p>No records found.</p>';
                    }
                ?>
                <i class='bx bx-search bx-md' onclick="search()"></i>
            </div>
            <a href="pages/about.php">ABOUT</a>
        </header>

        <section class="menu-wrapper">
            <div class="menu">
                <p>MUNICPALITIES<p>
                <a href="<?php echo $id[0] ?>">TARLAC CITY</a>
                <a href="<?php echo $id[1] ?>">ANAO</a>
                <a href="<?php echo $id[2] ?>">BAMBAN</a>
                <a href="<?php echo $id[3] ?>">CAMILING</a>
                <a href="<?php echo $id[4] ?>">CAPAS</a>
                <a href="<?php echo $id[5] ?>">CONCEPCION</a>
                <a href="<?php echo $id[6] ?>">GERONA</a>
                <a href="<?php echo $id[7] ?>">LA PAZ</a>
                <a href="<?php echo $id[8] ?>">MAYANTOC</a>
                <a href="<?php echo $id[9] ?>">MONCADA</a>
                <a href="<?php echo $id[10] ?>">PANIQUI</a>
                <a href="<?php echo $id[11] ?>">PURA</a>
                <a href="<?php echo $id[12] ?>">RAMOS</a>
                <a href="<?php echo $id[13] ?>">SAN CLEMENTE</a>
                <a href="<?php echo $id[14] ?>">SAN JOSE</a>
                <a href="<?php echo $id[15] ?>">SAN MANUEL</a>
                <a href="<?php echo $id[16] ?>">SANTA IGNACIA</a>
                <a href="<?php echo $id[17] ?>">VICTORIA</a>
            </div>
        </section>

        <div class="menu-button" onclick="menu()">
            <div class="div1"></div>
            <div class="div2"></div>
        </div>

        <div class="user-report-hover">
            <img src="../icons/info.png" alt="Information icon" width="30" height="30">
            Report an Issue about the Website
            <a class="user-report" onmouseover="reportHover()" onmouseout="reportHoverOut()" href="pages/contact-us.php">
                <img src="../icons/User-Report.png" alt="User report icon" width="30" height="30">
            </a>
        </div>
        
        <!--Where I started messing things up-->
        <?php
            include 'pages/connection.php';
            $query = "SELECT DISTINCT Municipality FROM government_orgs";
            $result = mysqli_query($conn, $query);
            $i = 0;
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div>';
                    echo '<div class="form-container">';
                    echo '<div class="record">';
                        // In this part, I used the Municapality Column of government_orgs table. 
                        // So, if, for example, may nadelete na municipality duon, then, deads. (Inadd ko talaga ung Concepcion ID#7)
                        // Nakabase ung sequence ng mga ito sa ID# nila. Not alphabetically.
                        // Also don't worry about duplicates, naka DISTINCT sila sa query in line 106.  
                        $id[$i] = $row['Municipality'];
                       
                        echo '<h2 id="' . $id[$i] . '">' . $row['Municipality'] . '</h2>';
                        $i = $i + 1;
                        echo '<div class="categories">';
                            // Ze five Buttons
                            echo '<button class="category hospital openPopup" data-table="hospitals" data-municipality="' . $row['Municipality'] . '">HOSPITAL</button>';
                            echo '<button class="category police openPopup" data-table="police_stations" data-municipality="' . $row['Municipality'] . '">POLICE</button>';
                            echo '<button class="short-category fire openPopup" data-table="fire_departments" data-municipality="' . $row['Municipality'] . '">FIRE</button>';
                            echo '<button class="long-category government openPopup" data-table="government_orgs" data-municipality="' . $row['Municipality'] . '">GOVERNMENT</button>';
                            echo '<button class="short-category ngo openPopup" data-table="non_government_orgs" data-municipality="' . $row['Municipality'] . '">NGO</button>';
                        echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No records found.</p>';
            }
        ?>
        <!--Di ko na chineck if nagamit ko ba talga toh-->
        <div class="popup" id="popup">
            <div class="popup-content">Loading...</div>
            <button id="closePopup">Close</button>
        </div>

        <script src="scripts/index.js"></script>
        <script src="scripts/report-hover.js"></script>
    </body>
</html>
