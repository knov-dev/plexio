<!--
Module to display the episode form
-->
<div class="reg-form plexiocontainer">
    <form style="width: 50%;" action="" method="post">
        <div class="row">
            </div>
            <div class="col-3 form-group">
                <label for="season_number">Season</label>
                <p><?php if (isset($episode)) echo $episode['season_number'] ?></p>
            </div>
            <div class="col-3 form-group">
                <label for="ep_num">Episode</label>
                <input id="ep_num" type="text" class="form-control"
                       value="<?php if (isset($episode)) echo $episode['episode_number'] ?>"
                       name="ep_num" placeholder="" required>
            </div>
        </div>
        <div class="row">
            <div class="col form-group">
                <label for="ep_name">Episode Name</label>
                <input id="ep_name" type="text" class="form-control"
                       value="<?php if (isset($episode)) echo $episode['name'] ?>"
                       name="ep_name" placeholder="" required>
            </div>
            <div class="col-3 form-group">
                <label for="ep_date">Air Date</label>
                <input id="ep_date" type="date" class="date form-control"
                       value="<?php if (isset($episode)) echo $episode['rel_date'] ?>" name="ep_date" required>
            </div>
            <div class="col-3 form-group">
                <label for="ep_duration">Duration</label>
                <input id="ep_duration" type="text" class="form-control"
                       value="<?php if (isset($episode)) echo $episode['duration'] ?>"
                       name="ep_duration" placeholder="" required>
            </div>
        </div>
        <div class="row">
            <div class="col form-group">
                <label for="ep_description">Description</label>
                <textarea id="ep_description" class="form-control"
                          Placeholder="Write a brief summary here..." name="ep_description" form="season_description"
                          required><?php if (isset($episode)) echo $episode['description'] ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col form-group">
                <label for="ep_thumb">Thumbnail Link</label>
                <input id="ep_thumb" type="text" class="form-control"
                       value="<?php if (isset($episode)) echo $episode['thumbnail'] ?>"
                       name="ep_thumb" placeholder="" required>
            </div>
        </div>
        <div class="row">
            <div class="col form-group">
                <label for="ep_url">Episode Url</label>
                <input id="ep_url" type="text" class="form-control"
                       value="<?php if (isset($episode)) echo $episode['media_url'] ?>"
                       name="ep_url" placeholder="Paste cover link here..." required>
            </div>
        </div>
        <div class="row">
            <div class="buttonrow col-md-12">
                <button type="submit" class="btn btn-primary" value="register">Submit</button>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php if (isset($episode)) echo $episode['id'] ?>">
    </form>
</div>