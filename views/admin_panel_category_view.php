<?php
session_start();
require "../db/connections.php";

if ($_POST) {
    include "../controller/manage_category.php";
}

include "modules/header.php";
include "modules/navbar.php";
include "modules/category_form.php";
include "modules/footer.php";