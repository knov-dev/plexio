<?php
if (mysqli_num_rows($episodes) > 0) {
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($episodes)) {
        echo "<li> 
<div class='row'>
    <div class='col-md-6'>" . $row["episode_number"] . $row["name"] . "</div>
    <div class='col-md-3'><a href='admin_panel_episode_view.php?id=" . $row["id"] . "'>Edit</a></div>
    <div class='col-md-3'><a href='../controller/delete_episode.php?id=" . $row["id"] . "'>Delete</a></div>
</div> </li>";
    }
    echo "</ul>";
} else {
    echo "<div class='querylist'>No results found.</div>";
}
echo "<div><a href='admin_panel_episode_view.php'>Add Episode</a></div>";
?>