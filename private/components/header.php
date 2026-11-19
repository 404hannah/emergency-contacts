<div class="header-wrapper">
    <header class="header-left">
        <a href=<?php echo $indexUrl ?>>TARLAC EMERGENCY CONTACTS</a>
    </header>
    <header class="header-right">
        <div class="search-bar">
            <input type="text" class="search-textbox" placeholder="Search institutions">
            <?php
            if (isset($_GET['search'])) {
                $search = "%" . $_GET['search'] . "%";

                $query_fire = mysqli_prepare($conn, "SELECT * FROM fire_departments WHERE Institution LIKE ?");
                mysqli_stmt_bind_param($query_fire, "s", $search);
                mysqli_stmt_execute($query_fire);
                $result_fire = mysqli_stmt_get_result($query_fire);

                $query_gov = mysqli_prepare($conn, "SELECT * FROM government_orgs WHERE Institution LIKE ?");
                mysqli_stmt_bind_param($query_gov, "s", $search);
                mysqli_stmt_execute($query_gov);
                $result_gov = mysqli_stmt_get_result($query_gov);

                $query_hospitals = mysqli_prepare($conn, "SELECT * FROM hospitals WHERE Institution LIKE ?");
                mysqli_stmt_bind_param($query_hospitals, "s", $search);
                mysqli_stmt_execute($query_hospitals);
                $result_hospitals = mysqli_stmt_get_result($query_hospitals);

                $query_ngos = mysqli_prepare($conn, "SELECT * FROM non_government_orgs WHERE Institution LIKE ?");
                mysqli_stmt_bind_param($query_ngos, "s", $search);
                mysqli_stmt_execute($query_ngos);
                $result_ngos = mysqli_stmt_get_result($query_ngos);

                $query_police = mysqli_prepare($conn, "SELECT * FROM police_stations WHERE Institution LIKE ?");
                mysqli_stmt_bind_param($query_police, "s", $search);
                mysqli_stmt_execute($query_police);
                $result_police = mysqli_stmt_get_result($query_police);

                if (mysqli_num_rows($result_fire) > 0) {
                    echo "<script> result(); </script>";
                } elseif (mysqli_num_rows($result_gov) > 0) {
                    echo "<script> result(); </script>";
                } elseif (mysqli_num_rows($result_hospitals) > 0) {
                    echo "<script> result(); </script>";
                } elseif (mysqli_num_rows($result_ngos) > 0) {
                    echo "<script> result(); </script>";
                } elseif (mysqli_num_rows($result_police) > 0) {
                    echo "<script> result(); </script>";
                } else {
                    echo "<script> noResult(); </script>";
                }
            }

            ?>
            <i class='bx bx-search bx-md' id="search-icon" onclick="search()"></i>
        </div>
        <a href=<?php echo $aboutUrl ?>>ABOUT</a>
    </header>
</div>