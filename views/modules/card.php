<!--
Module to display the movies/tv shows cards
-->


<div class='col-2 pb-5'>
    <a href='<?= $type ?>_view.php?id=<?= $row['id']; ?>'>
        <div class="card bg-light text-white">
            <img src="<?= $row['cover_img']; ?>" class="card-img" >
            <div class="card-img-overlay">
                <h5 class="card-title"><?= $row['name']; ?></h5>
            </div>
        </div>
    </a>
</div>