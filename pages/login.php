<?php 
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
    <?php
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $success = FALSE;

            $fetch_accounts = mysqli_query($conn, "SELECT * FROM accounts");

            if (mysqli_num_rows($fetch_accounts) > 0){
                while($fetch_row = mysqli_fetch_assoc($fetch_accounts)){
                    if ($username == $fetch_row['Username'] and $password == $fetch_row['Password']){
                        $success = TRUE;
                        break;
                    }
                }
            } else {
                echo "No Records.";
            }

            if ($success == TRUE){
                echo "<script> alert('Log in successful.'); </script>"; 
                header('Location: editor.php');
            } elseif (!$username && !$password) {
                
            } else {
                echo "<script> alert('Incorrect information.'); </script>"; 
            }
        }
    ?>

    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Log In</title>
        
        <link rel="stylesheet" href="../styles/header.css">
        <link rel="stylesheet" href="../styles/login.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

        <script src='../scripts/search.js'></script>
        <script src='../scripts/login.js'></script>
    </head>

    <body>
        <header class="header-left">
            <a href="../index.php">TARLAC EMERGENCY CONTACTS</a>
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
                ?>
                <i class='bx bx-search bx-md' onclick="search()"></i>
            </div>
            <a href="about.php">ABOUT</a>
        </header>

        <section class="login-section">
            <div class="login-titles">
                <h2>CONTENT MANAGER</h2>
                <h1>LOG IN</h1>
            </div>

            <form method="POST" class="container-manage">
                <p class="username-p">Username</p>
                <input type="text" class="username" name="username">
                <p>Password</p>
                <input type="password" class="password" name="password">

                <p>Not supposed to be here? <a href="../index.php">Go Back</a></p>
                <div class="login">
                    <input type="submit" class="submit" name="submit" value="Submit">
                </div>
            </form>
        </section>

    </body>
</html>