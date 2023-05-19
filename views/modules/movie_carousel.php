<?php
include "../db/connections.php";
$movies = mysqli_query($con,"SELECT * FROM movies");
$tv_shows = mysqli_query($con,"SELECT * FROM tv_shows");
$horror = mysqli_query($con, "SELECT movies . *
FROM tv_mov_categories
LEFT JOIN movies ON tv_mov_categories.movie_id = movies.id
WHERE tv_mov_categories.category_id =3" );
$active = "active";
$movieCount = 0;
$tvshowCount = 0;
$horrorCount = 0;
?>
<div class="container plexiocontainer">
    <div class="row" style="text-align: center;">
        <div class="col">
            <p style="margin-top: 5%;">Movies</p>
        </div>
        <div class="col" >
            <p style="margin-top: 5%;">Tv Shows</p>
        </div>
        <div class="col" >
            <p style="margin-top: 5%;">Latest</p>
        </div>
        <div class="col" >
            <p style="margin-top: 5%;">Horror</p>
        </div>
    </div>
    <div class="row" style="padding-top: 1%;">
        <div class="col">
            <div id="movcar" class="carousel slide">
                <div class="carousel-inner">
                    <?php while ($row = mysqli_fetch_array($movies, MYSQL_ASSOC)) {
                        echo "<div class='carousel-item ".$active."'><a href='movie_view.php?id=".$row['id']."'>
                        <img class='d-block w-100' src='".$row['cover_img']."' 
                        alt='carmov".$movieCount."'></a></div>";$active="";$movieCount++;
                    } ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#movcar" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#movcar" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col">
            <div id="tvcar" class="carousel slide">
                <div class="carousel-inner">
                    <?php $active = "active";?>
                    <?php while ($row = mysqli_fetch_array($tv_shows, MYSQL_ASSOC)) {
                        echo "<div class='carousel-item ".$active."'><a href='tv_show_view.php?id=".$row['id']."'>
                        <img class='d-block w-100' src='".$row['cover_img']."' 
                        alt='tvshow".$tvshowCount."'></a></div>";$active="";$tvshowCount++;
                    } ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#tvcar" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#tvcar" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <?php $movieCount = 0;
        $active = "active";
        $movies = mysqli_query($con,"SELECT * FROM movies");
        ?>
        <div class="col">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <?php while ($row = mysqli_fetch_array($movies, MYSQL_ASSOC)) {
                        echo "<div class='carousel-item ".$active."'><a href='movie_view.php?id=".$row['id']."'>
                        <img class='d-block w-100' src='".$row['cover_img']."' 
                        alt='movie".$movieCount."'></a></div>";$active="";$movieCount++;
                    } ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col">
            <div id="horcar" class="carousel slide">
                <div class="carousel-inner">
                    <?php $active = "active";?>
                    <?php while ($row = mysqli_fetch_array($horror, MYSQL_ASSOC)) {
                        echo "<div class='carousel-item ".$active."'><a href='movie_view.php?id=".$row['id']."'>
                        <img class='d-block w-100' src='".$row['cover_img']."' 
                        alt='horror".$horrorCount."'></a></div>";$active="";$horrorCount++;
                    } ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#horcar" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#horcar" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>