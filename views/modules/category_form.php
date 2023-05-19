<!--
Module to display the category form
-->
<div class="reg-form plexiocontainer">
    <form style="width: 50%;" action="" method="post">
        <div class="row">
            <div class="col-lg-12 form-group">
                <label for="cat_name">Category name</label>
                <input id="cat_name" type="text" class="form-control" name="cat_name" placeholder="" required>
            </div>
        </div>
        <div class="row">
            <div class="buttonrow col-md-12">
                <button type="submit" class="btn btn-primary" value="register">Submit</button>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php if (isset($cat_id)) echo $cat_id['id'] ?>">
    </form>
</div>