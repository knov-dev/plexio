<?php
//script to display all the seasons in the admin panel.
//if there is seasons on the database, create a list and populate it with database results
if (mysqli_num_rows($seasons) > 0) {
    echo "<div class='container'><ul>";
    while ($row = mysqli_fetch_assoc($seasons)) {
        echo "<li> 
<div class='row'>
    <div class='col'>" . $row["season_number"] . "</div>" ?>
        <?php if ($_SESSION['is_admin'] == 1) {
            echo "<div class='col-md-3'><!--Button to edit season --><a href='admin_panel_season_view.php?id=" . $row["id"] . "'>Edit</a></div>
    <div class='col-md-3'><!--Button to delete season --><a href='../controller/delete_season.php?id=" . $row["id"] . "'>Delete</a></div>
    <div class='col-md-3'><!--Button to watch season --><a href='season_view.php?id=" . $row["id"] . "'>Watch</a></div>";
        } else {
            echo "<div class='col-md-3'><a href='season_view.php?id=" . $row["id"] . "'>Watch</a></div>";
        } ?>
        <?= "</div> </li>";
    }
    echo "</ul></div>";
} else {
    //Otherwise, display an "empty results" message
    echo "<div class='querylist'>No results found.</div>";
}
//Button to add season
echo "<div><a href='admin_panel_season_view.php'>Add Season</a></div>";
?>