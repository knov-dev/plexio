<?php
//Retrieve the session and connect to the database
session_start();
require "../db/connections.php";

//If there is a post method, include the category controller
if ($_POST) {
    include "../controller/manage_category.php";
}

include "modules/header.php";
include "modules/navbar.php";
//Include the category form
include "modules/category_form.php";
include "modules/footer.php";