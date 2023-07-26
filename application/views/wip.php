<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <div class="panel-heading">
                        <h2>Edit profile</h2>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <center><img src="<?php echo $_SESSION['userPicture']; ?>" alt="" style="  width: 20%;
                                                  height: auto;
                                                  border-radius: 100% 100%;
                                                  margin:5%;" /> </center>
                        </div>
                        <form class="form-horizontal " method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label class="col-sm-3 control-label">ID:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="userId"
                                        value="<?php echo $_SESSION['userId']; ?>" readonly />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="userName" class="col-sm-3 control-label">Username :</label>
                                <div class="col-sm-9">
                                    <input type="text" id="userName" class="form-control" name="userName"
                                        value="<?php echo $_SESSION['userName']; ?>" readonly />

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-sm-3 control-label">Password : <span class="required"
                                        style="color:red;">*</span></label>
                                <div class="col-sm-9">
                                    <input type="password" id="password" class="form-control" name="userPassword"
                                        value="" required="required" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="confirmPassword" class="col-sm-3 control-label">Confirm Password : <span
                                        class="required" style="color:red;">*</span></label>
                                <div class="col-sm-9">
                                    <input onChange="checkPassword()" id="confirmPassword" type="password"
                                        class="form-control required" name="confirmPassword"
                                        value="" required="required" />
                                    <div id="divcheckPassword"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="userRole" class="col-sm-3 control-label">Role : </label>
                                <div class="col-sm-9">
                                    <input type="text" id="userRole" class="form-control m-bot15" name="userRole"
                                        value="<?php echo $_SESSION['userRole']; ?>" readonly />

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="userFirstname" class="col-sm-3 control-label">First name :</label>
                                <div class="col-sm-9">
                                    <input id="userFirstname" type="text" class="form-control" name="userFirstname"
                                        value="<?php echo $_SESSION['userFirstname']; ?>" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="userLastname" class="col-sm-3 control-label">Last name :</label>
                                <div class="col-sm-9">
                                    <input id="userLastname" type="text" class="form-control" name="userLastname"
                                        value="<?php echo $_SESSION['userLastname']; ?>" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="userEmail" class="col-sm-3 control-label">E-mail :</label>
                                <div class="col-sm-9">
                                    <input id="userEmail" type="text" class="form-control" name="userEmail"
                                        value="<?php echo $_SESSION['userEmail']; ?>" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="userAddress" class="col-sm-3 control-label">Address :</label>
                                <div class="col-sm-9">
                                    <input id="userAddress" type="text" class="form-control" name="userAddress"
                                        value="<?php echo $_SESSION['userAddress']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="picture" class="col-sm-3 control-label">Change picture :</label>
                                <div class="col-sm-9">
                                    <input id="picture" type="file" class="form-control" name="picture" />
                                </div>
                            </div>
                            <br>

                            <br>



                            <center><input type="submit" class="btn btn-primary" style="width:10%;" name="editprofile"
                                    value="Save" /></center>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>


<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- javascripts -->
<script src="scripts/jquery.js"></script>
<script src="scripts/main.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"> </script>
<script src='http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js'></script>
<script src="scripts/menu.js"></script>


</body>

</html>