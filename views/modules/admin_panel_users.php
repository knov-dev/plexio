<?php
if (mysqli_num_rows($usersResult) > 0) {
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($usersResult)) {
        echo "<li> 
<div class='row'>
    <div class='col-md-6'>" . $row["name"] . "</div>
    <div class='col-md-3'><a href='admin_panel_user_view.php?id=" . $row["userid"] . "'>Edit</a></div>
    <div class='col-md-3'><a href='../controller/delete_user.php?id=" . $row["userid"] . "'>Delete</a></div>
</div> </li>";
    }
    echo "</ul>";

} else {
    echo "<div class='querylist'>No results found.</div>";
}
echo "<div><a href='admin_panel_user_view.php'>Add User</a></div>";
?>