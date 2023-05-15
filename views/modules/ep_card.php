<!--
Module to display the episode cards
-->

<div class='col-2 pb-5'>
    <a href='episode_view.php?id=<?= $row['id']; ?>'>
        <div class="card bg-light text-white">
            <img src="<?= $row['thumbnail']; ?>" class="card-img" >
            <div class="card-img-overlay">
                <h5 class="card-title"><?= $row['name']; ?></h5>
            </div>
        </div>
    </a>
</div>