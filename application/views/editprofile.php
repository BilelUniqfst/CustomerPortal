<body class="bg-gradient">
    <div class="item">
        <div class="box-table">


            <!-- Start Login 
    ============================================= -->
            <div class="login-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 offset-lg-4">
                            <div class="login-box " style="margin-top: 150px;">
                                <div class="login">
                                    <div class="content">
                                        <a href="index.html"><img src="<?php echo $_SESSION['userPicture']; ?>" alt=""
                                                style="  width: 20%;
                                                  height: auto;
                                                  border-radius: 100% 100%;
                                                  margin:5%;" />
                                            <div>
                                                <a>
                                                    Edit Profile:


                                                </a>
                                            </div>
                                            <form method="POST">

                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <a align="left">Password: </a>
                                                            <input type="text" id="userName" class="form-control"
                                                                name="userName"
                                                                value="<?php echo $_SESSION['userName']; ?>" readonly />

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <a align="left">Password: </a>
                                                            <input type="password" id="password" class="form-control"
                                                                name="userPassword" value="" required="required" />

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <a align="left">Confirm Password: </a>
                                                            <input onChange="checkPassword()" id="confirmPassword"
                                                                type="password" class="form-control required"
                                                                name="confirmPassword" value="" required="required" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <a align="left">First Name: </a>
                                                            <input id="userFirstname" type="text" class="form-control"
                                                                name="userFirstname"
                                                                value="<?php echo $_SESSION['userFirstname']; ?>" />
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <a align="left">Last Name: </a>
                                                            <input id="userLastname" type="text" class="form-control"
                                                                name="userLastname"
                                                                value="<?php echo $_SESSION['userLastname']; ?>" />
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <a align="left">Email: </a>
                                                            <input id="userEmail" type="text" class="form-control"
                                                                name="userEmail"
                                                                value="<?php echo $_SESSION['userEmail']; ?>" />

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <a align="left">Adress: </a>
                                                            <input id="userAddress" type="text" class="form-control"
                                                                name="userAddress"
                                                                value="<?php echo $_SESSION['userAddress']; ?>" />

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <input type="submit" class="btn btn-primary"
                                                                name="editprofile" value="Save" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- End Login -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/circle-progress.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>