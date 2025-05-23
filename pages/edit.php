<?php 
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
    <?php 
        // Find the id
        if (isset($_GET['category'])) {
            $category = $_GET['category'];
            if(isset($_GET['institution'])){
                $institution = $_GET['institution'];
            
                $fetch_chosen = mysqli_query($conn, "SELECT * FROM $category WHERE Institution='$institution'");
                if (mysqli_num_rows($fetch_chosen) > 0){
                    while($fetch_row = mysqli_fetch_assoc($fetch_chosen)){ 
                        switch($category){
                            case "fire_departments":
                                $idInput = $fetch_row['Fire_Dept_ID'];
                                break;
                            case "government_orgs":
                                $idInput = $fetch_row['Gov.Organization_ID'];
                                break;
                            case "hospitals":
                                $idInput = $fetch_row['Hospital_ID'];
                                break;
                            case "non_government_orgs":
                                $idInput = $fetch_row['NGO_ID'];
                                break;
                            case "police_stations":
                                $idInput = $fetch_row['Police_Station_ID'];
                                break;
                            default:
                        }   
                    }
                }
            }
        } 

        // Update the data
        if(isset($_POST['save'])){
            $municipalityInput = $_POST['municipality'];
            $categoryInput = $_POST['category'];
            $instiInput = $_POST['institution'];
            $contactInput = $_POST['contact-info'];
            $mapsInput = $_POST['google-maps'];

            switch($categoryInput){
                case "Fire Department":
                    $update = "UPDATE fire_departments SET Fire_Dept_ID='$idInput', Municipality='$municipalityInput', Category='$categoryInput', Institution='$instiInput', `Contact Information`='$contactInput', `URL from Google Maps`='$mapsInput' WHERE Fire_Dept_ID='$idInput'";
                    break;
                case "Government Organization":
                    $update = "UPDATE government_orgs SET Gov.Organization_ID='$idInput', Municipality='$municipalityInput', Category='$categoryInput', Institution='$instiInput', `Contact Information`='$contactInput', `URL from Google Maps`='$mapsInput' WHERE Gov.Organization_ID='$idInput'";
                    break;
                case "Hospital":
                    $update = "UPDATE hospitals SET Hospital_ID='$idInput', Municipality='$municipalityInput', Category='$categoryInput', Institution='$instiInput', `Contact Information`='$contactInput', `URL from Google Maps`='$mapsInput' WHERE Hospital_ID='$idInput'";
                    break;
                case "Non-Governmental Organization":
                    $update = "UPDATE non_government_orgs SET NGO_ID='$idInput', Municipality='$municipalityInput', Category='$categoryInput', Institution='$instiInput', `Contact Information`='$contactInput', `URL from Google Maps`='$mapsInput' WHERE NGO_ID='$idInput'";
                    break;
                case "Police Station":
                    $update = "UPDATE police_stations SET Police_Station_ID='$idInput', Municipality='$municipalityInput', Category='$categoryInput', Institution='$instiInput', `Contact Information`='$contactInput', `URL from Google Maps`='$mapsInput' WHERE Police_Station_ID='$idInput'";
                    break;
                default:
            }
            
            if(isset($update) && $conn->query($update) == TRUE){
                echo "<script> alert('Data updated succesfully.'); </script>";
                header('Location: editor.php');
                exit();
            } else {
                echo "<script> alert('Error: Could not update record.'); </script>"; 
            };
        }

        // Delete the data
        if(isset($_POST['delete'])){
            $categoryInput = $_POST['category'];

            switch($categoryInput){
                case "Fire Department":
                    $delete = "DELETE FROM fire_departments WHERE Fire_Dept_ID='$idInput'";
                    break;
                case "Government Organization":
                    $delete = "DELETE FROM government_orgs WHERE Gov.Organization_ID='$idInput'";
                    break;
                case "Hospital":
                    $delete = "DELETE FROM hospitals WHERE Hospital_ID='$idInput'";
                    break;
                case "Non-Governmental Organization":
                    $delete = "DELETE FROM non_government_orgs WHERE NGO_ID='$idInput'";
                    break;
                case "Police Station":
                    $delete = "DELETE FROM police_stations WHERE Police_Station_ID='$idInput'";
                    break;
                default:
            }
            
            if($conn->query($delete) == TRUE){
                echo "<script> alert('Data deleted succesfully.'); </script>";
                header('Location: editor.php');
                exit();
            } else {
                echo "<script> alert('Error: Could not delete record.'); </script>"; 
            };
        }
    ?>

    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Edit Content</title>
        
        <link rel="stylesheet" href="../styles/header-editor.css">
        <link rel="stylesheet" href="../styles/edit.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <link rel="icon" type="image/x-icon" href="../images/tec-logo.png">

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
            <div class="sub-section">
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
                    <form method="POST" class="container-manage">
                    <?php
                            $municipalityVal = ""; 
                            $categoryVal = "";
                            $institutionVal = ""; 
                            $contactInfoVal = ""; 
                            $mapsVal = "";

                            if (isset($_GET['category'])) {
                                $category = $_GET['category'];
                                if(isset($_GET['institution'])){
                                    $institution = $_GET['institution'];
                                
                                    $fetch_chosen = mysqli_query($conn, "SELECT * FROM $category WHERE Institution='$institution'");
                                    if (mysqli_num_rows($fetch_chosen) > 0){
                                        while($fetch_row = mysqli_fetch_assoc($fetch_chosen)){ 
                                            $municipalityVal = $fetch_row['Municipality']; 
                                            $categoryVal = $fetch_row['Category'];
                                            $institutionVal = $fetch_row['Institution']; 
                                            $contactInfoVal = $fetch_row['Contact Information']; 
                                            $mapsVal = $fetch_row['URL from Google Maps'];
                                        }
                                    }
                                }
                            }
                        ?>
                        <div class="first-row">
                            <div class="column">
                                <p class="municipality-text">Municipality:</p>
                                <input type="text" class="municipality" name="municipality" value="<?php echo $municipalityVal ?>">
                            </div>
        
                            <div class="column">
                                <p>Category:</p>
                                <input type="text" class="category" name="category" value="<?php echo $categoryVal ?>">
                            </div>
                        </div>
        
                        <div class="middle-row">
                            <div class="column">
                                <p>Institution:</p>
                                <input type="text" class="institution" name="institution" value="<?php echo $institutionVal ?>">
                            </div>
                        </div>
        
                        <div class="last-row">
                            <div class="column">
                                <p>Contact Information:</p>
                                <input type="text" class="contact-info" name="contact-info" value="<?php echo $contactInfoVal ?>">
                            </div>
                            <div class="column">
                                <p>URL from Google Maps:</p>
                                <input type="text" class="google-maps" name="google-maps" value="<?php echo $mapsVal ?>">
                            </div>
                        </div>
        
                        <div class="buttons">
                            <a class="cancel" href="editor.php">CANCEL</a>
                            <input type="submit" class="save" name="save" value="SAVE EDIT">
                            <input type="submit" class="delete" name="delete" value="DELETE CONTENT">
                        </div>
                    </form>
                </div>
            </form>
        </section>

        <script src="../scripts/tabs.js"></script>
    </body>
</html>