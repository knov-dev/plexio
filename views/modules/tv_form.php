<!--
Module to display the Tv Shows form
-->
<div class="reg-form plexiocontainer">
    <form style="width: 50%;" action="" method="post">
        <div class="row">
            <div class="col form-group">
                <label for="tv_name">Tv Show Name</label>
                <input id="tv_name" type="text" class="form-control"
                       value="<?php if (isset($tv_show)) echo $tv_show['name'] ?>"
                       name="tv_name" placeholder="" required>
            </div>
            <div class="col-lg-3 form-group">
                <label for="tv_date">Release Date</label>
                <input id="tv_date" type="date" class="date form-control"
                       value="<?php if (isset($tv_show)) echo $tv_show['rel_date'] ?>" name="tv_date" required>
            </div>
        </div>
        <div class="row">
            <div class="col form-group">
                <label for="tv_description">Description</label>
                <textarea id="tv_description" class="form-control"
                          Placeholder="Write a brief summary here..." name="tv_description" form="tv_description"
                          required><?php if (isset($tv_show)) echo $tv_show['description'] ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col form-group">
                <label for="tv_cover">Cover Image</label>
                <input id="tv_cover" type="text" class="form-control"
                       value="<?php if (isset($tv_show)) echo $tv_show['cover_img'] ?>"
                       name="tv_cover" placeholder="Paste cover link here..." required>
            </div>
        </div>
        <div class="row">
            <h5>Seasons</h5>
            <div class="querybox col"> <?php include "modules/admin_panel_seasons.php" ?></div>
        </div>
        <div class="row">
            <div class="buttonrow col-md-12">
                <button type="submit" class="btn btn-primary" value="register">Submit</button>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php if (isset($tv_show)) echo $tv_show['id'] ?>">
    </form>
</div>