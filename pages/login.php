<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $success = FALSE;

    $fetch_accounts = mysqli_query($conn, "SELECT * FROM accounts");

    if (mysqli_num_rows($fetch_accounts) > 0) {
        while ($fetch_row = mysqli_fetch_assoc($fetch_accounts)) {
            if ($username == $fetch_row['Username'] and $password == $fetch_row['Password']) {
                $success = TRUE;
                break;
            }
        }
    } else {
        echo "No Records.";
    }

    if ($success == TRUE) {
        echo "<script> alert('Log in successful.'); </script>";
        header('Location: editor.php');
        exit();
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

    <link rel="icon" type="image/x-icon" href="../images/tec-logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <script src='../scripts/login.js'></script>
</head>

<body>
    <?php
    $indexUrl = '../index.php';
    $aboutUrl = 'about.php';
    include './components/header.php';
    ?>

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

    <script src='../scripts/search.js'></script>
</body>

</html>