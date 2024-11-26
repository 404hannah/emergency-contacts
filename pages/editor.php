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