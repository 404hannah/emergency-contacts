<header class="header-left">
    <a href=<?php echo $indexUrl ?>>TARLAC EMERGENCY CONTACTS</a>
</header>
<header class="header-right">
    <div class="search-bar">
        <input type="text" class="search-textbox" placeholder="Search institutions">
        <?php
        if (isset($_GET['search'])) {
            $search = $_GET['search'];

            $fetch_fire = mysqli_query($conn, "SELECT * FROM fire_departments WHERE Institution LIKE '%$search%'");

            $fetch_gov = mysqli_query($conn, "SELECT * FROM government_orgs WHERE Institution LIKE '%$search%'");

            $fetch_hospitals = mysqli_query($conn, "SELECT * FROM hospitals WHERE Institution LIKE '%$search%'");

            $fetch_ngos = mysqli_query($conn, "SELECT * FROM non_government_orgs WHERE Institution LIKE '%$search%'");

            $fetch_police = mysqli_query($conn, "SELECT * FROM police_stations WHERE Institution LIKE '%$search%'");

            if (mysqli_num_rows($fetch_fire) > 0) {
                echo "<script> result(); </script>";
            } elseif (mysqli_num_rows($fetch_gov) > 0) {
                echo "<script> result(); </script>";
            } elseif (mysqli_num_rows($fetch_hospitals) > 0) {
                echo "<script> result(); </script>";
            } elseif (mysqli_num_rows($fetch_ngos) > 0) {
                echo "<script> result(); </script>";
            } elseif (mysqli_num_rows($fetch_police) > 0) {
                echo "<script> result(); </script>";
            } else {
                echo "<script> noResult(); </script>";
            }
        }

        $query = "SELECT DISTINCT Municipality FROM hospitals ORDER BY Municipality ASC";
        $result = mysqli_query($conn, $query);
        $i = 0;
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id[$i] = "#" . $row['Municipality'];
                $i++;
            }
        } else {
            echo '<p>No records found.</p>';
        }
        ?>
        <i class='bx bx-search bx-md' id="search-icon" onclick="search()"></i>
    </div>
    <a href="pages/about.php">ABOUT</a>
</header>