
 <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>
                        <form action="<?php echo $level.data_path.'addaccount.php'?>" method ="POST" >
                            <div class="group-input">
                                <label for="username">Username *</label>
                                <input type="text" name="username" required>
                            </div>
                            <div class="group-input">
                                <label for="email">Email address *</label>
                                <input type="text" name="email" required>
                            </div>
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input type="password" name="password"  required name="password" >
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Confirm Password *</label>
                                <input type="password" name="con-password"  name ="cfpassword"required>
                            </div>
                            <button type="submit" class="site-btn register-btn">REGISTER</button>
                        </form>
                        <div class="switch-login">
                            <a href="<?php echo $level.pages_path.'login.php'?>" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
    