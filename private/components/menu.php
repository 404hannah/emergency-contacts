<section class="menu-wrapper">
    <div class="menu">
        <p>
            MUNICPALITIES
        <p>
            <?php
            $query = "SELECT DISTINCT Municipality FROM hospitals ORDER BY Municipality ASC";
            $result = mysqli_query($conn, $query);
            $i = 0;
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<a href="#' . $row['Municipality'] . '">' . strtoupper($row['Municipality']) . '</a>';
                }
            } else {
                echo "Error in loading headings.";
            }
            ?>
    </div>
</section>

<div class="menu-button" onclick="menu()">
    <div class="div1"></div>
    <div class="div2"></div>
</div>