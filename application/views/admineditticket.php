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

                                        <form method="POST">
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
                                                        <a>Ticket Status:</a>
                                                        <select id="ticketStatus" class="form-control"
                                                            name="ticketStatus">
                                                            <option value="NEW">NEW</option>
                                                            <option value="PENDING">PENDING</option>
                                                            <option value="CLOSED">CLOSED</option>
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
                                                    <div class="form-group">
                                                        <a>Assign To:</a>
                                                        <?php
                                                        $n = count($developerslist);
                                                        $res = '
                                              <select name="ticketassignedTo" class="form-control" id="select3"><option value="">Search agents</option>';
                                                        if ($n > 0) {
                                                            $num = 1;
                                                            foreach ($developerslist as $developer) {
                                                                $res .= '<option value="' . $developer['userId'] . '">' . $developer['userName'] . '</option>';
                                                                $num++;
                                                            }
                                                        } else {
                                                            $res .= '<option value="Please add developers first">Please add agents first</option>';
                                                        }
                                                        $res .= '</select>';

                                                        echo $res;
                                                        ?>
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
                                                        <?php echo '<a href="' . $ticketAttachment . '" onclick="return openWindow(this.href)"> <input name="ticketAttachment" type=text value="' . $ticketAttachment . '" placeholder="Attachment" readonly> </a>' ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <center><input type="submit" class="btn btn-primary"
                                                            name="editticket" value="Save" />
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

    <script type="text/javascript">
        $('select').select2();
    </script>
    <script language="javascript" type="text/javascript">
        function openWindow(href) {
            window.open(href, 'targetWindow', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=500,height=370');
            return false;
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            toggleFields();
            $("#ticketStatus").change(function () {
                toggleFields();
            });

        });

        function toggleFields() {
            if ($("#ticketStatus").val() === "CLOSED")
                $("#message").show();
            else
                $("#message").hide();
        }
    </script>

</body>

</html>