<body>
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area gradient-bg text-light text-center">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url(assets/img/shape/1.png);"></div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>My Profile</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Area
    ============================================= -->
    <div class="contact-area default-padding">
        <div class="container">
            <div class="contact-items">
                <div class="row">
                    <div class="col-lg-12 left-item">

                        <div align="right">
                            <a href="editprofile" class="btn btn-primary" style="style = top:10px;">Edit Profile</a>
                        </div>

                        <div class="info-items">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="info">
                                    <h5>User Name:</h5>
                                    <p>
                                        <?php echo $_SESSION['userName']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <h5>Email:</h5>
                                    <p>
                                        <?php echo $_SESSION['userEmail']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="info">
                                    <h5>Full Name:</h5>
                                    <p>
                                        <?php echo $_SESSION['userFirstname'] . ' ' . $_SESSION['userLastname']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-map-marked-alt"></i>
                                </div>
                                <div class="info">
                                    <h5>Location:</h5>
                                    <p>
                                        <?php echo $_SESSION['userAddress']; ?>
                                    </p>
                                </div>
                            </div>

                        </div>


                    </div>

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