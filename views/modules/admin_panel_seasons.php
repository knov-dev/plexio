<?php
if (mysqli_num_rows($seasons) > 0) {
    echo "<div class='container'><ul>";
    while ($row = mysqli_fetch_assoc($seasons)) {
        echo "<li> 
<div class='row'>
    <div class='col'>" . $row["season_number"] . "</div>" ?>
        <?php if ($_SESSION['is_admin'] == 1) {
            echo "<div class='col-md-3'><a href='admin_panel_season_view.php?id=" . $row["id"] . "'>Edit</a></div>
    <div class='col-md-3'><a href='../controller/delete_season.php?id=" . $row["id"] . "'>Delete</a></div>
    <div class='col-md-3'><a href='season_view.php?id=" . $row["id"] . "'>Watch</a></div>";
        }else{
            echo"<div class='col-md-3'><a href='season_view.php?id=" . $row["id"] . "'>Watch</a></div>";
        }?>
        <?= "</div> </li>";
    }
    echo "</ul></div>";
} else {
    echo "<div class='querylist'>No results found.</div>";
}
echo "<div><a href='admin_panel_season_view.php'>Add Season</a></div>";
?>