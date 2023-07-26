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
                                                Send Ticket:
                                            </a></div>

                                        
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <a>User ID:</a>
                                                    <input type="text" id="userId" class="form-control"
                                                        name="ticketuserId" value="<?php echo $_SESSION['userId'] ?>"
                                                        required="required" readonly="" />
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <a>Client Products:</a>
                                                        <?php
                                                        $client = $_SESSION['userId'];
                                                        $n = count($clientproducts);
                                                        $data = '
                                              <label for="productId"><span class="required" style="color:red;">*</span></label>
                                              <select id="productId" name="ticketproductId" class="form-control" required="required"> <option>Select</option>';
                                                        if ($n > 0) {

                                                            foreach ($clientproducts as $product) {
                                                                $data .= '<option value="' . $product['productId'] . '">' . $product['productName'] . '</option>';
                                                            }
                                                            $n++;
                                                        } else {
                                                            $data .= '<option>Product not found </option>';
                                                        }

                                                        $data .= '</select>';
                                                        echo $data;

                                                        ?>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <a>Ticket Module:</a>
                                                        <select id="moduleId" name="ticketmoduleId" class="form-control"
                                                            required="required">
                                                            <option>Select</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <a>Ticket Description:</a>
                                                        <textarea id="ticketDescription" class="form-control"
                                                            name="ticketDescription" required="required"> </textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <a>Submit Files:</a>
                                                        <input type="file" id="file" name="file">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <center><input type="submit" class="btn btn-primary"
                                                            name="sendticket" value="Save" />
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
        $.getScript('http://cdnjs.cloudflare.com/ajax/libs/select2/3.4.8/select2.min.js', function () {

            /* dropdown and filter select */
            var select = $('#select3').select3();

        }); //script   

    </script>

    <script>
        $(document).ready(function () {
            $('#productId').on('change', function () {
                var productId = $(this).val();
                if (productId) {
                    $.ajax({
                        type: 'GET',
                        url: 'sendticket/getmodules?productId=' + productId,
                        success: function (html) {
                            $('#moduleId').html(html);
                        }
                    });
                } else {
                    $('#moduleId').html('<option value="">Select product first</option>');


                }
            });
        });
    </script>

</body>

</html>