<?php
include './components/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_prepare($conn, "SELECT Password FROM accounts WHERE Username = ?");
    mysqli_stmt_bind_param($query, "s", $username); // s stands for string
    mysqli_stmt_execute($query);
    $result = mysqli_stmt_get_result($query);
    $fetch_row = mysqli_fetch_assoc($result);
    echo "<script> console.log('Fetched row: " . $fetch_row . "'); </script>";
    echo "<script> console.log('Password verification: " . password_verify($password, $fetch_row['Password']) . "'); </script>";

    if ($fetch_row && password_verify($password, $fetch_row['Password'])) {
        echo "<script> alert('Log in successful.'); </script>";
        header('Location: editor.php');
        exit();
    } else {
        echo "<script> alert('Invalid username or password.'); </script>";
    }
}
?>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Log In</title>

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
            <h1>LOG IN</h1>
        </div>

        <form method="POST" class="container-manage">
            <p class="username-p">Username</p>
            <input type="text" class="username" name="username">
            <p>Password</p>
            <input type="password" class="password" name="password">

            <p>Not supposed to be here? <a href="../index.php">Go Back</a></p>

            <div class="auth">
                <input type="submit" class="submit" name="submit" value="Submit">
                <p>Register? <a href="register.php">Click Here</a></p>
            </div>
        </form>
    </section>

    <script src='../scripts/search.js'></script>
</body>

</html>