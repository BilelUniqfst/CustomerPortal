<body class="bg-gradient">
    <div class="item">
        <div class="box-table">
            <div class="login-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 offset-lg-4">
                            <div class="login-box " style="margin-top: 150px;">
                                <div class="login">
                                    <div class="content">
                                        <!--<a href="index.html"><img src="<?php echo base_url(); ?>assets/img/logo.png"
                                                alt="Logo"></a>-->

                                        <div> <a>
                                                Edit Ticket:
                                            </a></div>

                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <a>Ticket ID:</a>
                                                    <input type="text" id="ticketId" class="form-control"
                                                        name="ticketId" value="<?php echo $ticketId ?>" readonly />
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <a>Ticket User ID:</a>
                                                        <input type="text" id="ticketuserId" class="form-control"
                                                            name="ticketuserId" value="<?php echo $ticketuserId; ?>"
                                                            readonly />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <a>Ticket Product ID:</a>
                                                        <input type="text" id="ticketproductId" class="form-control"
                                                            name="ticketproductId"
                                                            value="<?php echo $ticketproductId; ?>" readonly />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <a>Ticket Module ID:</a>
                                                        <input id="ticketmoduleId" type="text" class="form-control"
                                                            name="ticketmoduleId" value="<?php echo $ticketmoduleId; ?>"
                                                            readonly />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <a>Ticket Description:</a>
                                                        <textarea id="ticketDescription" class="form-control m-bot15"
                                                            name="ticketDescription"
                                                            readonly><?php echo $ticketDescription; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <a>Status:</a>
                                                        <select id="ticketStatus" class="form-control"
                                                            name="ticketStatus">
                                                            <option value="">Select</option>
                                                            <option value="CLOSED">Pending</option>
                                                            <option value="CLOSED">Closed</option>

                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <a>Ticket Message:</a>
                                                        <input placeholder="Ticket Message" id="ticketMessage" type="text"
                                                            class="form-control" name="ticketMessage" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group" id="patch">
                                                    <a>Attach File:</a>
                                                    <input type="file" id="file" name="file">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <a>Ticket Opening Date:</a>
                                                        <input id="ticketopeningDate" type="text" class="form-control"
                                                            name="ticketopeningDate"
                                                            value="<?php echo $ticketopeningDate; ?>" readonly />

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <a>Ticket Attachement:</a>
                                                        <?php echo '<a href="' . $ticketAttachment . '" onclick=""> <input name="ticketAttachment" type=text value="' . $ticketAttachment . '" placeholder="Attachment" readonly> </a>' ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <center><input type="submit" class="btn btn-primary"
                                                            name="closeticket" value="Save" />
                                                    </center>
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
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/equal-height.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.appear.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/modernizr.custom.13711.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/progress-bar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/count-to.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/YTPlayer.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/circle-progress.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootsnav.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>

</html>