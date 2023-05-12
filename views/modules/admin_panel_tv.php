<?php
if (mysqli_num_rows($tvResult) > 0) {
    echo "<ul >";
    while ($row = mysqli_fetch_assoc($tvResult)) {
        echo "<li> 
<div class='row'>
    <div class='col-md-6'>" . $row["name"] . "</div>
    <div class='col-md-3'><a href='admin_panel_tv_view.php?id=" . $row["id"] . "'>Edit</a></div>
    <div class='col-md-3'><a href='../controller/delete_tv.php?id=" . $row["id"] . "'>Delete</a></div>
</div> </li>";
    }
    echo "</ul>";
} else {
    echo "<div class='querylist'>No results found.</div>";
}
echo "<div><a href='admin_panel_tv_view.php'>Add Tv Show</a></div>";
?>