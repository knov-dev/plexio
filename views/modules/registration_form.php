<div class="reg-form plexiocontainer">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control"
                       value="<?php if (isset($user)) echo $user['email'] ?>"
                       name="email" placeholder="Email" required>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="password"><?php if (isset($user)){ echo 'New Password (Leave blank to keep existing)';}else{echo "Password";} ?></label>
                    <input id="password" type="password" class="form-control"
                           name="password" placeholder="Password"
                        <?php if(!isset($user)) echo 'required' ?>>
                </div>
                <div class="col-md-6">
                    <label for="password2"><?php if (isset($user)){ echo 'Confirm New Password';}else{echo "Re-Enter Password";} ?></label>
                    <input id="password2" type="password" class="form-control"
                           name="password2" placeholder="Re-Enter Password"
                        <?php if(!isset($user)) echo 'required' ?>>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control"
                       value="<?php if (isset($user)) echo $user['name'] ?>"
                       name="name" placeholder="Name" required>
            </div>
            <div class="col-md-6 form-group">
                <label for="surname">Surname</label>
                <input id="surname" type="text" class="form-control"
                       value="<?php if (isset($user)) echo $user['surname'] ?>"
                       name="surname" placeholder="Surname" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="dob">Date Of Birth</label>
                <input id="dob" type="date" class="date form-control" value="<?php if (isset($user)) echo $user['dob'] ?>" name="dob" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="address">Address</label>
                <input id="address" type="text" class="form-control"
                       value="<?php if (isset($user)) echo $user['address'] ?>"
                       name="address" placeholder="Address" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="card_num">Credit Card Number</label>
                <input id="card_num" type="text" class="form-control"
                       value="<?php if (isset($user)) echo $user['card_num'] ?>"
                       name="card_num" placeholder="Credit Card Number" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="exp_date">Expiration Date</label>
                <input id="exp_date" type="text" class="form-control"
                       value="<?php if (isset($user)) echo $user['exp_date'] ?>"
                       name="exp_date" placeholder="Exp Date" required>
            </div>
            <div class="form-group col-md-6">
                <label for="cvv">CVV</label>
                <input id="cvv" type="password" class="form-control"
                       value="<?php if (isset($user)) echo $user['cvv'] ?>"
                       name="cvv" placeholder="CVV" required>
            </div>
        </div>
        <div class="row">
            <div class="buttonrow col-md-12">
                <button type="submit" class="btn btn-primary" value="profile_manager">Register</button>
            </div>
        </div>
        <input type="hidden" name="userid" value="<?php if (isset($user)) echo $user['userid'] ?>">
    </form>
</div>