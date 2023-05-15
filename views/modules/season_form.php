<!--
Module to display the season form
-->

<div class="reg-form plexiocontainer">
    <form style="width: 50%;" action="" method="post">
        <div class="row">
            <div class="col form-group">
<!--               <p> --><?php //echo $season['episode_name']; ?><!--</p>-->
            </div>
            <div class="col-3 form-group">
                <label for="season_number">Season Number</label>
                <input id="season_number" type="text" class="form-control"
                       value="<?php if (isset($season)) echo $season['season_number'] ?>"
                       name="season_number" placeholder="" required>
            </div>
            <div class="col-3 form-group">
                <label for="season_date">Air Date</label>
                <input id="season_date" type="date" class="date form-control"
                       value="<?php if (isset($season)) echo $season['air_date'] ?>" name="season_date" required>
            </div>
        </div>
        <div class="row">
            <div class="col form-group">
                <label for="season_description">Description</label>
                <textarea id="season_description" class="form-control"
                          Placeholder="Write a brief summary here..." name="season_description" form="season_description"
                          required><?php if (isset($season)) echo $season['description'] ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col form-group">
                <label for="season_cover">Cover Image</label>
                <input id="season_cover" type="text" class="form-control"
                       value="<?php if (isset($season)) echo $season['cover_img'] ?>"
                       name="season_cover" placeholder="Paste cover link here..." required>
            </div>
        </div>
        <div class="row">
            <h5> Episodes </h5>
            <div class="querybox col"> <?php include "modules/admin_panel_episodes.php" ?></div>
        </div>
        <div class="row">
            <div class="buttonrow col-md-12">
                <button type="submit" class="btn btn-primary" value="register">Submit</button>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php if (isset($season)) echo $season['id'] ?>">
    </form>
</div>