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
                            <th>Institution</th>
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
                        <div class="column">
                            <p class="municipality-text">Municipality:</p>
                            <input type="text" class="municipality" value="<?php echo $municipalityVal ?>">
                        </div>
    
                        <div class="column">
                            <p>Category:</p>
                            <input type="text" class="category" value="<?php echo $categoryVal ?>">
                        </div>
                    </div>
    
                    <div class="middle-row">
                        <div class="column">
                            <p>Institution:</p>
                            <input type="text" class="institution" value="<?php echo $institutionVal ?>">
                        </div>
                    </div>
    
                    <div class="last-row">
                        <div class="column">
                            <p>Contact Information:</p>
                            <input type="text" class="contact-info" value="<?php echo $contactInfoVal ?>">
                        </div>
                        <div class="column">
                            <p>URL from Google Maps:</p>
                            <input type="text" class="google-maps" value="<?php echo $mapsVal ?>">
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