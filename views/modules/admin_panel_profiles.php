<!--
Module to display the profiles form
-->
<div class="container plexiocontainer" style="padding-top: 1%;">
    <div class="row">
        <div class="col-8">
            <h3>Profiles</h3>
        </div>
        <div class="col-4" style="justify-content: end;display: flex;">
            <a class="btn btn-primary" href='profile_manager.php?create=1'>
                <i class="fa-solid fa-plus"></i> Add Profile</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <table class="table table-striped table-bordered table-sm ">
                <thead>
                <tr>
                    <th scope="col">Profile Name</th>
                    <th scope="col">Profile Image</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $profiles = mysqli_query($con, "SELECT * FROM profiles WHERE user_id=" . $_SESSION['userid']);
                if (mysqli_num_rows($profiles) > 0) {
                    while ($row = mysqli_fetch_assoc($profiles)) { ?>
                        <tr>
                            <th scope="row">
                                <?= $row["profile_name"]; ?>
                            </th>
                            <td>
                                <?= $row["profile_img"]; ?>
                            </td>
                            <td>
                                <a href='profile_manager.php?id=<?= $row["profile_id"];?>'>
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href='../../controller/delete_profile.php?id=<?= $row["profile_id"]; ?>'>
                                    <i class="fa-sharp fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="3">No profiles found</td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

