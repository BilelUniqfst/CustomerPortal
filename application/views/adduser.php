<body class="bg-gradient">

    <!-- Start Login 
    ============================================= -->
    <div class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="login-box">
                        <div class="login">
                            <div class="content">
                                <!--<a href="index.html"><img src="assets/img/logo.png" alt="Logo"></a>-->
                                <div>
                                    <p>
                                        Add User:
                                    </p>
                                </div>
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-user"></i> <input type="text" id="userName"
                                                    placeholder="Name*" class="form-control" name="userName" value=""
                                                    required="required" />
                                                <span id="availibility"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-envelope-open"></i> <input type="password"
                                                    placeholder="Password*" id="password" class="form-control"
                                                    name="userPassword" value="" required="required"
                                                    onchange="passwordLength()" />
                                                <div id="divcheckLength"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-lock"></i> <input placeholder="Confirm Password*"
                                                    onChange="checkPassword()" id="confirmPassword" type="password"
                                                    class="form-control" name="confirmPassword" value=""
                                                    required="required" />
                                                <div id="divcheckPassword"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <a align="left">Role: </a>
                                                <select id="userRole" class="form-control" name="userRole"
                                                    required="required">
                                                    <option value="ADMIN">Administrator</option>
                                                    <option value="CLIENT">Client</option>
                                                    <option value="DEVELOPER">Developer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-lock"></i> <input placeholder="User First Name"
                                                    id="userFirstname" type="text" class="form-control"
                                                    name="userFirstname" value="" />
                                                <div id="divcheckPassword"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-lock"></i> <input placeholder="User Last Name"
                                                    id="userLastname" type="text" class="form-control"
                                                    name="userLastname" value="" />
                                                <div id="divcheckPassword"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-lock"></i> <input placeholder="User Email"
                                                    id="userEmail" type="text" class="form-control" name="userEmail"
                                                    value="" />
                                                <div id="divcheckPassword"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-lock"></i> <input placeholder="User Adress"
                                                    id="userAddress" type="text" class="form-control" name="userAddress"
                                                    value="" />
                                                <div id="divcheckPassword"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="row">

                                            <input type="submit" style="text-align:center;" class="btn btn-primary" name="adduser" value="Submit" />

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