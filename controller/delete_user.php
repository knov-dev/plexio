<?php
//Start the session and connect to the database
session_start();
require '../db/connections.php';
//if there is an ID as an URL parameter, delete the item in the database with the associated ID
if(isset($_GET['id'])){
    $query = "DELETE FROM users WHERE userid=".$_GET["id"];
   $result = mysqli_query($con,$query);
}
//If the account belongs to an administrator, redirect to the admin panel. Else redirect to the account view
if(isset($_GET['is_admin'])==1){
    header("Location: /plexio/views/admin_panel.php");
}else{
    session_destroy();
    header("Location: /plexio/index.php");
}