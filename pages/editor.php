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
            <a class="log-out" href="../index.php">
                <p>LOG OUT</p>
            </a>
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
                                    <th>Institution</th>
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

                                    $fetch_ngos = mysqli_query($conn, "SELECT * FROM non_government_orgs");

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
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                    <div class="container-manage">
                        <div class="first-row">
                            <div class="column">
                                <p class="municipality-text">Municipality:</p>
                                <select class="municipality" onchange="Municipality()">
                                    <option value="" disabled selected>Select municipality</option>
                                    <?php 
                                        if (isset($_GET['municipality'])) {
                                            $municipality = $_GET['municipality'];
                                        } else {
                                            $municipality = "X";
                                        }
                                    ?>
                                    <option value="Tarlac City" <?php echo ($municipality == 'Tarlac City') ? 'selected' : '';?>>TARLAC CITY</option>
                                    <option value="Anao" <?php echo ($municipality == 'Anao') ? 'selected' : '';?>>ANAO</option>
                                    <option value="Bamban" <?php echo ($municipality == 'Bamban') ? 'selected' : '';?>>BAMBAN</option>
                                    <option value="Camiling" <?php echo ($municipality == 'Camiling') ? 'selected' : '';?>>CAMILING</option>
                                    <option value="Capas" <?php echo ($municipality == 'Capas') ? 'selected' : '';?>>CAPAS</option>
                                    <option value="Concepcion" <?php echo ($municipality == 'Concepcion') ? 'selected' : '';?>>CONCEPCION</option>
                                    <option value="Gerona" <?php echo ($municipality == 'Gerona') ? 'selected' : '';?>>GERONA</option>
                                    <option value="La Paz" <?php echo ($municipality == 'La Paz') ? 'selected' : '';?>>LA PAZ</option>
                                    <option value="Mayantoc" <?php echo ($municipality == 'Mayantoc') ? 'selected' : '';?>>MAYANTOC</option>
                                    <option value="Moncada" <?php echo ($municipality == 'Moncada') ? 'selected' : '';?>>MONCADA</option>
                                    <option value="Paniqui" <?php echo ($municipality == 'Paniqui') ? 'selected' : '';?>>PANIQUI</option>
                                    <option value="Pura" <?php echo ($municipality == 'Pura') ? 'selected' : '';?>>PURA</option>
                                    <option value="Ramos" <?php echo ($municipality == 'Ramos') ? 'selected' : '';?>>RAMOS</option>
                                    <option value="San Clemente" <?php echo ($municipality == 'San Clemente') ? 'selected' : '';?>>SAN CLEMENTE</option>
                                    <option value="San Jose" <?php echo ($municipality == 'San Jose') ? 'selected' : '';?>>SAN JOSE</option>
                                    <option value="San Miguel" <?php echo ($municipality == 'San Miguel') ? 'selected' : '';?>>SAN MANUEL</option>
                                    <option value="Santa Ignacia" <?php echo ($municipality == 'Santa Ignacia') ? 'selected' : '';?>>SANTA IGNACIA</option>
                                    <option value="Victoria" <?php echo ($municipality == 'Victoria') ? 'selected' : '';?>>VICTORIA</option>
                                </select>
                            </div>
        
                            <div class="column">
                                <p>Category:</p>
                                <select class="category" onchange="Category()">
                                    <option value="" disabled selected>Select category</option>
                                    <?php 
                                        if (isset($_GET['category'])) {
                                            $category = $_GET['category'];
                                        } else {
                                            $category = "X";
                                        }
                                    ?>
                                    <option value="fire_departments" <?php echo ($category == 'fire_departments') ? 'selected' : '';?>>Fire Department</option>
                                    <option value="government_orgs" <?php echo ($category == 'government_orgs') ? 'selected' : '';?>>Government Organization</option>
                                    <option value="hospitals" <?php echo ($category == 'hospitals') ? 'selected' : '';?>>Hospital</option>
                                    <option value="non_government_orgs" <?php echo ($category == 'non_government_orgs') ? 'selected' : '';?>>Non-Governmental Organization</option>
                                    <option value="police_stations" <?php echo ($category == 'police_stations') ? 'selected' : '';?>>Police Station</option>
                                </select>  
                            </div>
                        </div>
        
                        <div class="middle-row">
                            <div class="column">
                                <p>Institution:</p>
                                <select class="institution">
                                    <option value="" disabled selected>Select institutions from a municipality and category</option>
                                    <?php
                                        if (isset($_GET['municipality'])) {
                                            $municipality = $_GET['municipality'];
                                        }

                                        if (isset($_GET['category'])) {
                                            $category = $_GET['category'];

                                            $fetch_insti = mysqli_query($conn, "SELECT Institution FROM $category WHERE Municipality='$municipality'");

                                            if (mysqli_num_rows($fetch_insti) > 0){
                                                while($fetch_row = mysqli_fetch_assoc($fetch_insti)){ ?>
                                                <option value="<?php echo $fetch_row['Institution'] ?>"> <?php echo $fetch_row['Institution'] ?> </option>
                                                <?php }
                                            } else {
                                                echo "No Records.";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
        
                        <div class="buttons">
                            <a class="edit" onclick="edit()">EDIT CONTENT</a>
                            <a class="add" onclick="add()">ADD CONTENT</a>
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <script src="../scripts/tabs.js"></script>
        <script src="../scripts/editor.js"></script>
    </body>
</html>