<?php include 'facebook.php' ?>
                    <form id="loginform" class="form-horizontal" role="form"  autocomplete="off">
                        <div style="margin-bottom: 10px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <!-- USERNAME OR EMAIL ADDRESS -->
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email" pattern="[a-zA-Z0-9]{5,}" title="Minimum 5 letters or numbers." oninvalid="this.setCustomValidity('Enter User Name Here')" oninput="setCustomValidity('')" required>                                        
                        </div>
                        <div style="margin-bottom: 10px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <!--  PASSWORD  -->
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password" pattern=".{5,}" title="Minmimum 5 letters or numbers." oninvalid="this.setCustomValidity('Enter a password')" oninput="setCustomValidity('')" required>
                        </div>
                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->
                            <div class="col-sm-12 controls center-text">
                              <a id="btn-login" href="#" class="btn btn-danger">Login</a>
                              <div><?php echo $output; ?></div>
                              <!--<a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>-->
                            </div>
                        </div>  
                    </form>