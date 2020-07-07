<section class="profile-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="profile-title">
                        <h4>Change Your Avatar</h4>
                    </div>
                    <div class="profile-widget">
                        
                        <div class="cw-item">
                            <img src="<?php echo $level.'../fashi_admin/'.img_path.'account/'.$accPF[0]['img']?>" alt="">
                        </div>
                        <form action="<?php echo $level.function_path.'edit-profile.php'?>"  method ="post" enctype="multipart/form-data">
                            <input id="fileInput" class="btn btn-primary btn-block text-uppercase "  type="file" name="fileupload" style="display:none;">
                            </input>
                            <input
                            type="button"
                            class="btn btn-primary btn-block mx-auto"
                            value="UPLOAD NEW PHOTO"
                            name =""
                            onclick="document.getElementById('fileInput').click();"/>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="contact-form">
                        <div class="leave-comment">
                            <h4>Your Profile</h4>
                            <p>Account Type: <?php echo $accPF[0][1]?></p>
                            <div class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="name">Your Name</label>
                                        <input id ="name" name = "name" type="text" placeholder="<?php echo $accPF[0]["name"]?>">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="email">Email</label>
                                        <input id ="email" name = "email" type="text" placeholder="<?php echo $accPF[0]["email"]?>">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="password1">New Password</label>
                                        <input id ="password1" name = "password1" type="password" placeholder="Password">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="password2">Confirm Password</label>
                                        <input id ="password2" name = "password2" type="password" placeholder="Confirm Password ">
                                    </div>
                                    <input type="text"  name = "id"value = "<?php echo $accPF[0]["id"]?>" hidden = true >
                                    <div class="col-lg-12">
                                        <button type="submit" name = "submit" class="site-btn">Send message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>