<?php 
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Editor Page</title>
        
        <link rel="stylesheet" href="../styles/header-editor.css">
        <link rel="stylesheet" href="../styles/editor.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    </head>

    <body>
        <header class="header-left">
            <h2>TARLAC EMERGENCY CONTACTS</h2>
            <h1>CM</h1>
        </header>
        <header class="header-right">
            <div class="log-out">
                <p>LOG OUT</p>
            </div>
            <div class="switch-mode"  onclick="switchMode()">
                <i class='bx bxs-moon bx-lg'></i>
            </div>
        </header>

        <section>
            <form>
                <div class="tabs">
                    <div class="view" onclick="viewMode()">VIEW MODE</div>
                    <div class="manage" onclick="manageMode()">MANAGE MODE</div>
                </div>
                <div class="container-manage">
                    <div class="table-container">
                        <table>
                            <tr>
                                <th>Municipality</th>
                                <th>Category</th>
                                <th class="institution">Institution</th>
                                <th>Contact Information</th>
                                <th>Url from Google Maps</th>
                            </tr>
                            <?php
                                $fetch_fire = mysqli_query($conn, "SELECT * FROM fire_departments");

                                if (mysqli_num_rows($fetch_fire) > 0){
                                    while($fetch_row = mysqli_fetch_assoc($fetch_fire)){ ?>
                                        <tr>
                                            <td><?php echo $fetch_row['Municipality'] ?></td>
                                            <td><?php echo $fetch_row['Category'] ?></td>
                                            <td><?php echo $fetch_row['Institution'] ?></td>
                                            <td><?php echo $fetch_row['Contact Information'] ?></td>
                                            <td><?php echo $fetch_row['URL from Google Maps'] ?></td>
                                        </tr>
                                    <?php }
                                } else {
                                    echo "No Records.";
                                }

                                $fetch_gov = mysqli_query($conn, "SELECT * FROM government_orgs");

                                if (mysqli_num_rows($fetch_gov) > 0){
                                    while($fetch_row = mysqli_fetch_assoc($fetch_gov)){ ?>
                                        <tr>
                                            <td><?php echo $fetch_row['Municipality'] ?></td>
                                            <td><?php echo $fetch_row['Category'] ?></td>
                                            <td><?php echo $fetch_row['Institution'] ?></td>
                                            <td><?php echo $fetch_row['Contact Information'] ?></td>
                                            <td><?php echo $fetch_row['URL from Google Maps'] ?></td>
                                        </tr>
                                    <?php }
                                } else {
                                    echo "No Records.";
                                }

                                $fetch_hospitals = mysqli_query($conn, "SELECT * FROM hospitals");

                                if (mysqli_num_rows($fetch_hospitals) > 0){
                                    while($fetch_row = mysqli_fetch_assoc($fetch_hospitals)){ ?>
                                        <tr>
                                            <td><?php echo $fetch_row['Municipality'] ?></td>
                                            <td><?php echo $fetch_row['Category'] ?></td>
                                            <td><?php echo $fetch_row['Institution'] ?></td>
                                            <td><?php echo $fetch_row['Contact Information'] ?></td>
                                            <td><?php echo $fetch_row['URL from Google Maps'] ?></td>
                                        </tr>
                                    <?php }
                                } else {
                                    echo "No Records.";
                                }

                                /* $fetch_ngos = mysqli_query($conn, "SELECT * FROM non-governmental_orgs");

                                if (mysqli_num_rows($fetch_ngos) > 0){
                                    while($fetch_row = mysqli_fetch_assoc($fetch_ngos)){ ?>
                                        <tr>
                                            <td><?php echo $fetch_row['Municipality'] ?></td>
                                            <td><?php echo $fetch_row['Category'] ?></td>
                                            <td><?php echo $fetch_row['Institution'] ?></td>
                                            <td><?php echo $fetch_row['Contact Information'] ?></td>
                                            <td><?php echo $fetch_row['URL from Google Maps'] ?></td>
                                        </tr>
                                    <?php }
                                } else {
                                    echo "No Records.";
                                }

                                $fetch_police = mysqli_query($conn, "SELECT * FROM police_stations");

                                if (mysqli_num_rows($fetch_police) > 0){
                                    while($fetch_row = mysqli_fetch_assoc($fetch_police)){ ?>
                                        <tr>
                                            <td><?php echo $fetch_row['Municipality'] ?></td>
                                            <td><?php echo $fetch_row['Category'] ?></td>
                                            <td><?php echo $fetch_row['Institution'] ?></td>
                                            <td><?php echo $fetch_row['Contact Information'] ?></td>
                                            <td><?php echo $fetch_row['URL from Google Maps'] ?></td>
                                        </tr>
                                    <?php }
                                } else {
                                    echo "No Records.";
                                } */
                            ?>
                        </table>
                    </div>
                </div>
                <div class="container-view">
                    <div class="first-row">
                        <div clas="column">
                            <p class="municipality-text">Municipality:</p>
                            <select class="municipality"></select>
                        </div>
    
                        <div clas="column">
                            <p>Category:</p>
                            <select class="category"></select>
                        </div>
                    </div>
    
                    <div class="middle-row">
                        <div clas="column">
                            <p>Institution:</p>
                            <select class="institution"></select>
                        </div>
                    </div>
    
                    <div class="last-row">
                        <div clas="column">
                            <p>Contact Information:</p>
                            <select class="contact-info"></select>
                        </div>
                        <div clas="column">
                            <p>URL from Google Maps:</p>
                            <select class="google-maps"></select>
                        </div>
                    </div>
    
                    <div class="buttons">
                        <a class="edit" href="edit.html">EDIT CONTENT</a>
                        <a class="add" href="add.html">ADD CONTENT</a>
                    </div>
                </div>
            </form>
        </section>

        <script src="../scripts/tabs.js"></script>
    </body>
</html>