<?php
//script to display all the movies in the admin panel.
//if there is movies on the database, create a list and populate it with database results
if (mysqli_num_rows($movieResult) > 0) {
    echo "<ul >";
    while ($row = mysqli_fetch_assoc($movieResult)) {
        echo "<li> 
<div class='row'>
    <div class='col-md-6'>" . $row["name"] . "</div>
    <div class='col-md-3'><!--Button to edit movie --><a href='admin_panel_movie_view.php?id=" . $row["id"] . "'>Edit</a></div>
    <div class='col-md-3'><!--Button to delete movie --><a href='../controller/delete_movie.php?id=" . $row["id"] . "'>Delete</a></div>
</div> </li>";
    }
    echo "</ul>";
} else {
        //Otherwise, display an "empty results" message
echo "<div class='querylist'>No results found.</div>";
}
//Button to add movie
echo "<div><a href='admin_panel_movie_view.php'>Add Movie</a></div>";
?>