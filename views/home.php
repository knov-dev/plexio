<?php
//Retrieve the session and connect to the database
session_start();

include "modules/header.php";
include "modules/navbar.php";
//Display the carousel units with filtered movies and tv shows.
include "modules/movie_carousel.php";

include "modules/footer.php";