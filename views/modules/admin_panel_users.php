<?php
//script to display all the episodes in the admin panel.
//if there is episodes on the database, create a list and populate it with database results
if (mysqli_num_rows($usersResult) > 0) {
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($usersResult)) {
        echo "<li> 
<div class='row'>
    <div class='col-md-6'>" . $row["name"] . "</div>
    <div class='col-md-3'><!--Button to edit episode --><a href='admin_panel_user_view.php?id=" . $row["userid"] . "'>Edit</a></div>
    <div class='col-md-3'><!--Button to delete episode --><a href='../controller/delete_user.php?id=" . $row["userid"] . "'>Delete</a></div>
</div> </li>";
    }
    echo "</ul>";

} else {
        //Otherwise, display an "empty results" message
echo "<div class='querylist'>No results found.</div>";
}
//Button to add episode
echo "<div><a href='admin_panel_user_view.php'>Add User</a></div>";
?>