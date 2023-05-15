<?php
//Start the session and connect to the database
session_start();
require '../db/connections.php';
//if there is an ID as an URL parameter, delete the item in the database with the associated ID
if(isset($_GET['id'])){
    $query = "DELETE FROM movies WHERE id=".$_GET["id"];
    $result = mysqli_query($con,$query);
}
//Redirect to the admin panel
header("Location: /plexio/views/admin_panel.php");