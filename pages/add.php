<?php 
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Add Content</title>
        
        <link rel="stylesheet" href="../styles/header-editor.css">
        <link rel="stylesheet" href="../styles/add.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

        <script src='../scripts/add.js'></script>
    </head>

    <body>
        <header class="header-left">
            <h2>TARLAC EMERGENCY CONTACTS</h2>
            <h1>CM</h1>
        </header>
        <header class="header-right">
            <a class="log-out" href="index.php">
                <p>LOG OUT</p>
            </a>
            <div class="switch-mode"  onclick="switchMode()">
                <i class='bx bxs-moon bx-lg'></i>
            </div>
        </header>

        <section>
            <?php
                /* if (isset($_GET['Municipality']) and isset($_GET['Category']) and isset($_GET['Institution']) and isset($_GET['Contact Information']) and isset($_GET['URL from Google Maps'])) {
                    $municipality = $_GET['Municipality'];
                    $category = $_GET['Category'];
                    $institution = $_GET['Institution'];
                    $contactInfo = $_GET['Contact Information'];
                    $googleMaps = $_GET['URL from Google Maps'];
    
                    $fetch_chosen = mysqli_query($conn, "SELECT * FROM category WHERE Institution='$institution'");
                } */
            ?>
            <form>
                <div class="tabs">
                    <div class="view" onclick="viewMode()">VIEW MODE</div>
                    <div class="manage" onclick="manageMode()">MANAGE MODE</div>
                </div>
                <div class="container-view">
                    <table>
                        <tr>
                            <th>Municipality</th>
                            <th>Category</th>
                            <th class="institution">Institution</th>
                            <th>Contact Information</th>
                            <th>Url from Google Maps</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="container-manage">
                    <div class="first-row">
                        <div clas="column">
                            <p class="municipality-text">Municipality:</p>
                            <input type="text" class="municipality" placeholder="<?php
                                if (isset($_GET['Municipality']) and isset($_GET['Category']) and isset($_GET['Institution']) and isset($_GET['Contact Information']) and isset($_GET['URL from Google Maps'])) {
                                    $municipality = $_GET['Municipality'];
                                    $category = $_GET['Category'];
                                    $institution = $_GET['Institution'];
                                    $contactInfo = $_GET['Contact Information'];
                                    $googleMaps = $_GET['URL from Google Maps'];
                    
                                    $fetch_chosen = mysqli_query($conn, "SELECT * FROM category WHERE Institution='$institution'");
                                    if (mysqli_num_rows($fetch_chosen) > 0){
                                        while($fetch_row = mysqli_fetch_assoc($fetch_chosen)){ ?>
                                        <?php echo $fetch_row['Institution'] ?>
                                    <?php }
                                    }
                                }
                            ?>">
                        </div>
    
                        <div clas="column">
                            <p>Category:</p>
                            <input type="text" class="category" placeholder="<?php
                                if (isset($_GET['Municipality']) and isset($_GET['Category']) and isset($_GET['Institution']) and isset($_GET['Contact Information']) and isset($_GET['URL from Google Maps'])) {
                                    $municipality = $_GET['Municipality'];
                                    $category = $_GET['Category'];
                                    $institution = $_GET['Institution'];
                                    $contactInfo = $_GET['Contact Information'];
                                    $googleMaps = $_GET['URL from Google Maps'];
                    
                                    $fetch_chosen = mysqli_query($conn, "SELECT * FROM category WHERE Institution='$institution'");

                                    if (mysqli_num_rows($fetch_chosen) > 0){
                                        while($fetch_row = mysqli_fetch_assoc($fetch_chosen)){ ?>
                                        <?php echo $fetch_row['Category'] ?>
                                    <?php }
                                    }
                                }
                            ?>">
                        </div>
                    </div>
    
                    <div class="middle-row">
                        <div clas="column">
                            <p>Institution:</p>
                            <input type="text" class="institution" placeholder="<?php
                                if (isset($_GET['Municipality']) and isset($_GET['Category']) and isset($_GET['Institution']) and isset($_GET['Contact Information']) and isset($_GET['URL from Google Maps'])) {
                                    $municipality = $_GET['Municipality'];
                                    $category = $_GET['Category'];
                                    $institution = $_GET['Institution'];
                                    $contactInfo = $_GET['Contact Information'];
                                    $googleMaps = $_GET['URL from Google Maps'];
                    
                                    $fetch_chosen = mysqli_query($conn, "SELECT * FROM category WHERE Institution='$institution'");
                                    if (mysqli_num_rows($fetch_chosen) > 0){
                                        while($fetch_row = mysqli_fetch_assoc($fetch_chosen)){ ?>
                                        <?php echo $fetch_row['Institution'] ?>
                                    <?php }
                                    }
                                }
                            ?>">
                        </div>
                    </div>
    
                    <div class="last-row">
                        <div clas="column">
                            <p>Contact Information:</p>
                            <input type="text" class="contact-info" placeholder="<?php
                                if (isset($_GET['Municipality']) and isset($_GET['Category']) and isset($_GET['Institution']) and isset($_GET['Contact Information']) and isset($_GET['URL from Google Maps'])) {
                                    $municipality = $_GET['Municipality'];
                                    $category = $_GET['Category'];
                                    $institution = $_GET['Institution'];
                                    $contactInfo = $_GET['Contact Information'];
                                    $googleMaps = $_GET['URL from Google Maps'];
                    
                                    $fetch_chosen = mysqli_query($conn, "SELECT * FROM category WHERE Institution='$institution'");
                                    if (mysqli_num_rows($fetch_chosen) > 0){
                                        while($fetch_row = mysqli_fetch_assoc($fetch_chosen)){ ?>
                                        <?php echo $fetch_row['Contact Information'] ?>
                                    <?php }
                                    }
                                }
                            ?>">
                        </div>
                        <div clas="column">
                            <p>URL from Google Maps:</p>
                            <input type="text" class="google-maps" placeholder="<?php
                                 if (isset($_GET['Municipality']) and isset($_GET['Category']) and isset($_GET['Institution']) and isset($_GET['Contact Information']) and isset($_GET['URL from Google Maps'])) {
                                    $municipality = $_GET['Municipality'];
                                    $category = $_GET['Category'];
                                    $institution = $_GET['Institution'];
                                    $contactInfo = $_GET['Contact Information'];
                                    $googleMaps = $_GET['URL from Google Maps'];
                    
                                    $fetch_chosen = mysqli_query($conn, "SELECT * FROM category WHERE Institution='$institution'");
                                    if (mysqli_num_rows($fetch_chosen) > 0){
                                        while($fetch_row = mysqli_fetch_assoc($fetch_chosen)){ ?>
                                        <?php echo $fetch_row['URL from Google Maps'] ?>
                                    <?php }
                                    }
                                 }
                            ?>">
                        </div>
                    </div>
    
                    <div class="buttons">
                        <a class="save" href="">SAVE CONTENT</a>
                        <a class="cancel" href="editor.php">CANCEL</a>
                    </div>
                </div>
            </form>
        </section>

        <script src="../scripts/tabs.js"></script>
    </body>
</html>