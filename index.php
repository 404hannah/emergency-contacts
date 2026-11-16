<?php
include 'pages/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Home</title>

    <link rel="icon" type="image/png" href="icons/tec-logo.png">

    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/menu.css">
    <link rel="stylesheet" href="styles/index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <script src="scripts/result-index.js"></script>
</head>

<body>

    <?php
    $indexUrl = 'index.php';
    $aboutUrl = 'pages/about.php';
    include './pages/components/header.php';
    ?>

    <?php
    include './pages/components/menu.php';
    ?>

    <section class="main">
        <div class="user-report-hover">
            <img src="icons/info.png" alt="Information icon" width="30" height="30">
            Report an Issue about the Website
            <a class="user-report" onmouseover="reportHover()" onmouseout="reportHoverOut()" href="pages/contact-us.php">
                <img src="icons/User-Report.png" alt="User report icon" width="30" height="30">
            </a>
        </div>

        <!--Where I started messing things up-->
        <?php
        include 'pages/connection.php';
        $query = "SELECT DISTINCT Municipality FROM hospitals ORDER BY Municipality ASC";
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

        <div class="popup" id="popup">
            <div class="popup-content">Loading...</div>
            <div class="close-btn-wrapper">
                <button id="closePopup">Close</button>
            </div>
        </div>
    </section>

    <script src="scripts/index.js"></script>
    <script src="scripts/report-hover.js"></script>
    <script src="scripts/search-index.js"></script>
</body>

</html>