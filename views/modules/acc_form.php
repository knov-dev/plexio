<!--
Module to display the new/edit user account form
-->


<div class="container plexiocontainer" style="padding-top: 1%;">
    <div class="row">
        <div class="col-6">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Name:</td>
                        <td><?= $user['name'] ?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><?= $user['email'] ?></td>
                    </tr>
                    <tr>
                        <td>Surname:</td>
                        <td><?= $user['surname'] ?> </td>
                    </tr>
                    <tr>
                        <td>Date of Birth:</td>
                        <td><?= $user['dob'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-6">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Address:</td>
                        <td><?= $user['address'] ?></td>
                    </tr>
                    <tr>
                        <td>Card Number:</td>
                        <td><?= $user['card_num'] ?></td>
                    </tr>
                    <tr>
                        <td>Exp Date:</td>
                        <td><?= $user['exp_date'] ?></td>
                    </tr>
                    <tr>
                        <td>Subscription:</td>
                        <td><?= $user['is_member'] == 1 ? "Active Member" : "Non-Active Member" ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row" style="text-align: center;">
        <div class='col' style="padding-top: 1%;">
            <a class="btn btn-secondary" href='../views/register.php?id=<?= $user['userid'] ?>'>Edit User</a>
        </div>
        <div class='col'>
           <p>Add Sub: </p><div id="paypal-button-container"></div>
        </div>
        <div class='col' style="padding-top: 1%;">
            <a class="btn btn-secondary" href='../controller/manage_user.php?sub=0'>Remove Sub</a>
        </div>
        <div class='col' style="padding-top: 1%;">
            <a class="btn btn-danger" href='../delete_profile.php?id=<?= $user['userid'] ?>'>Delete Account</a>
        </div>
    </div>
</div>
<hr>