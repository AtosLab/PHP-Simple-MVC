<div class="row readmode">

    <div class="col-2">
    </div>

    <div class="col-9">
        <div class="row">
            <div class="col-2">
                <img alt=''  id="profile-image" src="<?php echo $user_info['avatar']; ?>" class="profile-img">
            </div>
            <div class="col-9">
                <h4 id="userName"><?php echo $user_info['username']; ?></h4>
                <h5> Description/Bio: <span class="profile-edit-button"><input type="button" onclick="edit_profile()" value="Edit Profile"></span></h5>
                <p id="description"><?php echo $user_info['description']; ?></p>
                <h5 id="email"> <?php echo $user_info['email']; ?></h5>
                <h5 id="phone"> <?php echo $user_info['phoneno']; ?></h5>
                <h5 id="address"> <?php echo $user_info['address']; ?> </h5>
                <p><a href="#">100 Following</a><span class="profile-followers" ><a href="#">80 Followers</a></span></p>
            </div>
            <div class="col-1">
            </div>
        </div>
    </div>

    <div class="col-1">
    </div>
</div>
<div class="row editmode" style="display: none;">

    <div class="col-2">
    </div>

    <div class="col-9">
        <form action="<?php echo $base_url.'user/profile'; ?>" method="POST">
            <div class="row">
                <div class="col-2">
                    <img alt=''  id="d-profile-image" src="<?php echo $user_info['avatar']; ?>" class="profile-img">
                    <input type="text" value="<?php echo $user_info['avatar']; ?>" id="avatar" name="avatar">
                </div>
                <div class="col-9">
                    <h2>Edit Profile:</h2>
                    <div class="row">
                        <div class="col-4">
                            <label for="d-email">Email:</label><br><br>
                            <label for="d-phone">Phone No:</label><br><br>
                            <label for="d-address">Address:</label><br><br>
                            <label for="d-description">Description:</label><br><br>

                        </div>
                        <div class="col-8">
                            <input class="inputs" type="text" id="email" name="email" value="<?php echo $user_info['email']; ?>"><br><br>
                            <input class="inputs" type="text" id="phoneno" name="phoneno" value="<?php echo $user_info['phoneno']; ?>"><br><br>
                            <input class="inputs" type="text" id="address" name="address" value="<?php echo $user_info['address']; ?>"><br><br>
                            <textarea class="inputs" id="description" name="description"><?php echo $user_info['description']; ?></textarea><br><br>
                            <input type="submit" value="submit" id="editConfirm" style="float: right">

                        </div>
                    </div>

                </div>
                <div class="col-1">
                </div>
            </div>
        </form>
    </div>

    <div class="col-1">
    </div>
</div>