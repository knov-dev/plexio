<?php
if (mysqli_num_rows($categoryResult) > 0) {
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($categoryResult)) {
        echo "<li> 
<div class='row'>
    <div class='col-md-6'>" . $row["name"] . "</div>
    <div class='col-md-3'><a href='../controller/delete_category.php?id=" . $row["id"] . "'>Delete</a></div>
</div> </li>";
    }
    echo "</ul>";
} else {
    echo "<div class='querylist'>No results found.</div>";
}
echo "<div><a href='admin_panel_category_view.php'>Add Category</a></div></div>";
?>