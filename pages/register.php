<?php
include './components/connection.php';
include './components/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $code = $_POST['code'];
    $registration_code = $_ENV['REGISTRATION_CODE'];

    // Checks if the username is not yet used
    $user_query = mysqli_prepare($conn, "SELECT Username FROM accounts WHERE Username = ?");
    mysqli_stmt_bind_param($user_query, "s", $username); // s stands for string
    mysqli_stmt_execute($user_query);
    $result = mysqli_stmt_get_result($user_query);
    $fetch_row = mysqli_fetch_assoc($result);

    if (!$username && !$password) {
        echo "<script> alert('Please input email and password.'); </script>";
    } else if ($fetch_row) {
        echo "<script> alert('Username is already in use.'); </script>";
    } else if (strlen($password) < 5) {
        echo "<script> alert('Password should be greater than 5 characters.'); </script>";
    } else if (!$registration_code) {
        echo "<script> console.error('Environment registration code not set.'); </script>";
    } else if (hash_equals($code, $registration_code)) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $register_query = mysqli_prepare($conn, "INSERT INTO `accounts` (`Username`, `Password`) VALUES (?, ?)");
        mysqli_stmt_bind_param($register_query, "ss", $username, $hash); // s stands for string
        if (mysqli_stmt_execute($register_query) && mysqli_stmt_affected_rows($register_query) === 1) {
            header('Location: login.php');
            exit();
        } else {
            echo "<script> alert('Registration failed.'); </script>";
        }
    } else {
        echo "<script> alert('Invalid credentials.'); </script>";
    }
}
?>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/register-login.css">
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

    <section class="auth-section">
        <div class="auth-titles">
            <h2>CONTENT MANAGER</h2>
            <h1>REGISTER</h1>
        </div>

        <form method="POST" class="container-manage">
            <p class="username-p">Username</p>
            <input type="text" class="username" name="username">
            <p>Password</p>
            <input type="password" class="password" name="password">
            <p>Code</p>
            <input type="password" class="password" name="code">

            <p>Not supposed to be here? <a href="../index.php">Go Back</a></p>

            <div class="auth">
                <input type="submit" class="register" name="register" value="Register">
                <p>Log In? <a href="login.php">Click Here</a></p>
            </div>
        </form>
    </section>

    <script src='../scripts/search.js'></script>
</body>

</html>