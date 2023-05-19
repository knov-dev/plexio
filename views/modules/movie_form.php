<!--
Module to display the movie form
-->
<div class="reg-form plexiocontainer">
    <form style="width: 50%;" action="" method="post">
        <div class="row">
            <div class="col-lg-6 form-group">
                <label for="mov_name">Movie Name</label>
                <input id="mov_name" type="text" class="form-control"
                       value="<?php if (isset($movie)) echo $movie['name'] ?>"
                       name="mov_name" placeholder="" required>
            </div>
            <div class="col-lg-3 form-group">
                <label for="mov_date">Release Date</label>
                <input id="mov_date" type="date" class="date form-control"
                       value="<?php if (isset($movie)) echo $movie['rel_date'] ?>" name="mov_date" required>
            </div>
            <div class="col-lg-3 form-group">
                <label for="mov_length">Duration</label>
                <input id="mov_length" type="text" class="form-control"
                       value="<?php if (isset($movie)) echo $movie['duration'] ?>"
                       name="mov_length" placeholder="" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 form-group">
                <label for="mov_description">Description</label>
                <textarea id="mov_description" class="form-control"
                          Placeholder="Write a brief summary here..." name="mov_description" form="mov_description"
                          required><?php if (isset($movie)) echo $movie['description'] ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 form-group">
                <label for="mov_url">Movie Link</label>
                <input id="mov_url" type="text" class="form-control"
                       value="<?php if (isset($movie)) echo $movie['media_url'] ?>"
                       name="mov_url" placeholder="" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 form-group">
                <label for="mov_cover">Movie Name</label>
                <input id="mov_cover" type="text" class="form-control"
                       value="<?php if (isset($movie)) echo $movie['cover_img'] ?>"
                       name="mov_cover" placeholder="Paste cover link here..." required>
            </div>
        </div>
        <div class="row">
            <div class="buttonrow col-md-12">
                <button type="submit" class="btn btn-primary" value="register">Submit</button>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php if (isset($movie)) echo $movie['id'] ?>">
    </form>
</div>