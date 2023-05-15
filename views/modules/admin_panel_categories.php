<?php
//script to display all the categories in the admin panel.
//if there is categories on the database, create a list and populate it with database results
if (mysqli_num_rows($categoryResult) > 0) {
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($categoryResult)) {
        echo "<li> 
<div class='row'>
    <div class='col-md-6'>" . $row["name"] . "</div>
    <div class='col-md-3'><!--Button to delete category --> <a href='../controller/delete_category.php?id=" . $row["id"] . "'>Delete</a></div>
</div> </li>";
    }
    echo "</ul>";
} else {
    //Otherwise, display an "empty results" message
    echo "<div class='querylist'>No results found.</div>";
}
//Button to add category
echo "<div><a href='admin_panel_category_view.php'>Add Category</a></div></div>";
?>