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
            <a class="log-out" href="index.php">
                <p>LOG OUT</p>
            </a>
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
                <div class="sub-form">
                    <div class="container-view">
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
                                    } */

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
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                    <div class="container-manage">
                        <div class="first-row">
                            <div clas="column">
                                <p class="municipality-text">Municipality:</p>
                                <select class="municipality" onselect="Municpality()">
                                    <option value="" disabled selected>Select municipality</option>
                                    <option value="Tarlac City">TARLAC CITY</option>
                                    <option value="Anao">ANAO</option>
                                    <option value="Bamban">BAMBAN</option>
                                    <option value="Camiling">CAMILING</option>
                                    <option value="Capas">CAPAS</option>
                                    <option value="Concepcion">CONCEPCION</option>
                                    <option value="Gerona">GERONA</option>
                                    <option value="La Paz">LA PAZ</option>
                                    <option value="Mayontoc">MAYANTOC</option>
                                    <option value="Moncada">MONCADA</option>
                                    <option value="Paniqui">PANIQUI</option>
                                    <option value="Pura">PURA</option>
                                    <option value="Ramos">RAMOS</option>
                                    <option value="San Clemente">SAN CLEMENTE</option>
                                    <option value="San Jose">SAN JOSE</option>
                                    <option value="San Miguel">SAN MANUEL</option>
                                    <option value="Santa Ignacia">SANTA IGNACIA</option>
                                    <option value="Victoria">VICTORIA</option>
                                </select>
                            </div>
        
                            <div clas="column">
                                <p>Category:</p>
                                <select class="category">
                                    <option value="" disabled selected>Select category</option>
                                    <option value="Fire Department">Fire Department</option>
                                    <option value="Government Organization">Government Organization</option>
                                    <option value="Hospital">Hospital</option>
                                    <option value="Non-Governmental Organization">Non-Governmental Organization</option>
                                    <option value="Police Station">Police Station</option>
                                </select>  
                            </div>
                        </div>
        
                        <div class="middle-row">
                            <div clas="column">
                                <p>Institution:</p>
                                <select class="institution">
                                    <option value="" disabled selected>Select institutions from a municpality</option>
                                    <?php
                                        /* if (isset($_GET['municipality'])) {
                                            $municipality = $_GET['municipality'];
                                        } */

                                        $fetch_insti = mysqli_query($conn, "SELECT Institution FROM police_stations");

                                        if (mysqli_num_rows($fetch_insti) > 0){
                                            while($fetch_row = mysqli_fetch_assoc($fetch_insti)){ ?>
                                               <option value="<?php echo $fetch_row['Institution'] ?>"> <?php echo $fetch_row['Institution'] ?> </option>
                                            <?php }
                                        } else {
                                            echo "No Records.";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
        
                        <div class="last-row">
                            <div clas="column">
                                <p>Contact Information:</p>
                                <select class="contact-info">
                                    <option value="" disabled selected>Select contact information from a municpality</option>
                                    <?php
                                        /* if (isset($_GET['municipality'])) {
                                            $municipality = $_GET['municipality'];
                                        } */

                                        $fetch_insti = mysqli_query($conn, "SELECT `Contact Information`  FROM police_stations");

                                        if (mysqli_num_rows($fetch_insti) > 0){
                                            while($fetch_row = mysqli_fetch_assoc($fetch_insti)){ ?>
                                               <option value="<?php echo $fetch_row['Contact Information'] ?>"> <?php echo $fetch_row['Contact Information'] ?> </option>
                                            <?php }
                                        } else {
                                            echo "No Records.";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div clas="column">
                                <p>URL from Google Maps:</p>
                                <select class="google-maps">
                                    <option value="" disabled selected>Select URL from Google Maps from a municpality</option>
                                    <?php
                                        /* if (isset($_GET['municipality'])) {
                                            $municipality = $_GET['municipality'];
                                        } */

                                        $fetch_insti = mysqli_query($conn, "SELECT `URL from Google Maps` FROM police_stations");

                                        if (mysqli_num_rows($fetch_insti) > 0){
                                            while($fetch_row = mysqli_fetch_assoc($fetch_insti)){ ?>
                                               <option value="<?php echo $fetch_row['URL from Google Maps'] ?>"> <?php echo $fetch_row['URL from Google Maps'] ?> </option>
                                            <?php }
                                        } else {
                                            echo "No Records.";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
        
                        <div class="buttons">
                            <a class="edit" href="edit.html">EDIT CONTENT</a>
                            <a class="add" href="add.html">ADD CONTENT</a>
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <script src="../scripts/tabs.js"></script>
    </body>
</html>