<?php
include './components/connection.php';
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

    <link rel="icon" type="image/x-icon" href="../favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    $indexUrl = '../index.php';
    $aboutUrl = 'about.php';
    include './components/header.php';
    ?>

    <section>
        <?php
        if (isset($_GET['search'])) {
            $search = "%" . $_GET['search'] . "%";
            $counter = 0;

            $query_fire = mysqli_prepare($conn, "SELECT * FROM fire_departments WHERE Institution LIKE ?");
            mysqli_stmt_bind_param($query_fire, "s", $search);
            mysqli_stmt_execute($query_fire);
            $result_fire = mysqli_stmt_get_result($query_fire);

            if (mysqli_num_rows($result_fire) > 0) {
                $counter = $counter + mysqli_num_rows($result_fire);
            }

            $query_gov = mysqli_prepare($conn, "SELECT * FROM government_orgs WHERE Institution LIKE ?");
            mysqli_stmt_bind_param($query_gov, "s", $search);
            mysqli_stmt_execute($query_gov);
            $result_gov = mysqli_stmt_get_result($query_gov);

            if (mysqli_num_rows($result_gov) > 0) {
                $counter = $counter + mysqli_num_rows($result_gov);
            }

            $query_hospitals = mysqli_prepare($conn, "SELECT * FROM hospitals WHERE Institution LIKE ?");
            mysqli_stmt_bind_param($query_hospitals, "s", $search);
            mysqli_stmt_execute($query_hospitals);
            $result_hospitals = mysqli_stmt_get_result($query_hospitals);

            if (mysqli_num_rows($result_hospitals) > 0) {
                $counter = $counter + mysqli_num_rows($result_hospitals);
            }

            $query_ngos = mysqli_prepare($conn, "SELECT * FROM non_government_orgs WHERE Institution LIKE ?");
            mysqli_stmt_bind_param($query_ngos, "s", $search);
            mysqli_stmt_execute($query_ngos);
            $result_ngos = mysqli_stmt_get_result($query_ngos);

            if (mysqli_num_rows($result_ngos) > 0) {
                $counter = $counter + mysqli_num_rows($result_ngos);
            }

            $query_police = mysqli_prepare($conn, "SELECT * FROM police_stations WHERE Institution LIKE ?");
            mysqli_stmt_bind_param($query_police, "s", $search);
            mysqli_stmt_execute($query_police);
            $result_police = mysqli_stmt_get_result($query_police);

            if (mysqli_num_rows($result_police) > 0) {
                $counter = $counter + mysqli_num_rows($result_police);
            }
        }
        ?>
        <h2>Search Results for "<?php echo substr($search, 1, (strlen($search) - 2)) ?>"</h2>
        <div class="results">
            <p>Found <?php echo $counter ?> Result/s.</p>
            <div class="main-contents">
                <?php
                if (mysqli_num_rows($result_fire) > 0) {
                    while ($fetch_row = mysqli_fetch_assoc($result_fire)) { ?>
                        <div class="result">
                            <div class="text">
                                <h4><?php echo $fetch_row['Institution'] ?></h4>
                                <h3><?php echo $fetch_row['Contact Information'] ?></h3>
                            </div>
                            <div class="icons">
                                <a class="gmaps" onclick="showMap()"><img src="../icons/Location.png" alt="Location icon" width="30" height="30"></a>
                                <div class="map-modal" id="mapModal">
                                    <button class="map-modal-close" onclick="closeMap()">×</button>
                                    <iframe src="<?php echo $fetch_row['URL from Google Maps'] ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <a onclick="copyToClipboard('<?php echo $fetch_row['Contact Information'] ?>')"><img src="../icons/Copy.png" alt="Copy icon" width="30" height="30"></a>
                                <a class="call-btn" onclick="window.location.href='tel:<?php echo $fetch_row['Contact Information'] ?>'"><img src="../icons/Call.png" alt="Call icon" width="30" height="30"></a>
                            </div>
                        </div>
                    <?php }
                }

                if (mysqli_num_rows($result_gov) > 0) {
                    while ($fetch_row = mysqli_fetch_assoc($result_gov)) { ?>
                        <div class="result">
                            <div class="text">
                                <h4><?php echo $fetch_row['Institution'] ?></h4>
                                <h3><?php echo $fetch_row['Contact Information'] ?></h3>
                            </div>
                            <div class="icons">
                                <a class="gmaps" onclick="showMap()"><img src="../icons/Location.png" alt="Location icon" width="30" height="30"></a>
                                <div class="map-modal" id="mapModal">
                                    <button class="map-modal-close" onclick="closeMap()">×</button>
                                    <iframe src="<?php echo $fetch_row['URL from Google Maps'] ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <a onclick="copyToClipboard('<?php echo $fetch_row['Contact Information'] ?>')"><img src="../icons/Copy.png" alt="Copy icon" width="30" height="30"></a>
                                <a class="call-btn" onclick="window.location.href='tel:<?php echo $fetch_row['Contact Information'] ?>'"><img src="../icons/Call.png" alt="Call icon" width="30" height="30"></a>
                            </div>
                        </div>
                    <?php }
                }

                if (mysqli_num_rows($result_hospitals) > 0) {
                    while ($fetch_row = mysqli_fetch_assoc($result_hospitals)) { ?>
                        <div class="result">
                            <div class="text">
                                <h4><?php echo $fetch_row['Institution'] ?></h4>
                                <h3><?php echo $fetch_row['Contact Information'] ?></h3>
                            </div>
                            <div class="icons">
                                <a class="gmaps" onclick="showMap()"><img src="../icons/Location.png" alt="Location icon" width="30" height="30"></a>
                                <div class="map-modal" id="mapModal">
                                    <button class="map-modal-close" onclick="closeMap()">×</button>
                                    <iframe src="<?php echo $fetch_row['URL from Google Maps'] ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <a onclick="copyToClipboard('<?php echo $fetch_row['Contact Information'] ?>')"><img src="../icons/Copy.png" alt="Copy icon" width="30" height="30"></a>
                                <a class="call-btn" onclick="window.location.href='tel:<?php echo $fetch_row['Contact Information'] ?>'"><img src="../icons/Call.png" alt="Call icon" width="30" height="30"></a>
                            </div>
                        </div>
                    <?php }
                }

                if (mysqli_num_rows($result_ngos) > 0) {
                    while ($fetch_row = mysqli_fetch_assoc($result_ngos)) { ?>
                        <div class="result">
                            <div class="text">
                                <h4><?php echo $fetch_row['Institution'] ?></h4>
                                <h3><?php echo $fetch_row['Contact Information'] ?></h3>
                            </div>
                            <div class="icons">
                                <a class="gmaps" onclick="showMap()"><img src="../icons/Location.png" alt="Location icon" width="30" height="30"></a>
                                <div class="map-modal" id="mapModal">
                                    <button class="map-modal-close" onclick="closeMap()">×</button>
                                    <iframe src="<?php echo $fetch_row['URL from Google Maps'] ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <a onclick="copyToClipboard('<?php echo $fetch_row['Contact Information'] ?>')"><img src="../icons/Copy.png" alt="Copy icon" width="30" height="30"></a>
                                <a class="call-btn" onclick="window.location.href='tel:<?php echo $fetch_row['Contact Information'] ?>'"><img src="../icons/Call.png" alt="Call icon" width="30" height="30"></a>
                            </div>
                        </div>
                    <?php }
                }

                if (mysqli_num_rows($result_police) > 0) {
                    while ($fetch_row = mysqli_fetch_assoc($result_police)) { ?>
                        <div class="result">
                            <div class="text">
                                <h4><?php echo $fetch_row['Institution'] ?></h4>
                                <h3><?php echo $fetch_row['Contact Information'] ?></h3>
                            </div>
                            <div class="icons">
                                <a class="gmaps" onclick="showMap()"><img src="../icons/Location.png" alt="Location icon" width="30" height="30"></a>
                                <div class="map-modal" id="mapModal">
                                    <button class="map-modal-close" onclick="closeMap()">×</button>
                                    <iframe src="<?php echo $fetch_row['URL from Google Maps'] ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <a onclick="copyToClipboard('<?php echo $fetch_row['Contact Information'] ?>')"><img src="../icons/Copy.png" alt="Copy icon" width="30" height="30"></a>
                                <a class="call-btn" onclick="window.location.href='tel:<?php echo $fetch_row['Contact Information'] ?>'"><img src="../icons/Call.png" alt="Call icon" width="30" height="30"></a>
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
    <script>
        function showMap() {
            document.getElementById('mapModal').style.display = 'block';
        }

        function closeMap() {
            document.getElementById('mapModal').style.display = 'none';
        }
    </script>
    <script src="../scripts/report-hover.js"></script>
    <script src='../scripts/index.js'></script>
    <script src='../scripts/search.js'></script>
</body>

</html>