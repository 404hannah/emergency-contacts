<?php
include '../private/components/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
    <title>No Results</title>

    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/no-result.css">

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
        <?php
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
        } else {
            $search = "";
        }
        ?>
        <h2>Search Results for "<?php echo "$search" ?>"</h2>
        <div class="results">
            <div class="main-contents">
                <h1>We are Sorry.</h1>
                <h2>There are No Results for "<?php echo "$search" ?>".</h2>
                <a class="back" href="../index.php">Go Back to Home Page</a>
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
    <script src='../scripts/search.js'></script>
</body>

</html>