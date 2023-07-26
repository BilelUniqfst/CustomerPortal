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
                                        <!--<a href="index.html"><img src="assets/img/logo.png" alt="Logo"></a>-->
                                        <div>
                                            <a>
                                                Add Product:
                                            </a>
                                        </div>
                                        <form method="POST">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <i class="fas fa-user"></i> <input placeholder="Product Name*"
                                                            type="text" id="productName" class="form-control"
                                                            name="productName" value="" required="required" />
                                                        <span id="availibility"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <?php
                                                        $n = count($clientslist);
                                                        $res = '<select placeholder="Client:*" name="productclientId" class="form-control" id="select3" required="required"><option>Search Clients</option>';
                                                        if ($n > 0) {
                                                            $num = 1;
                                                            foreach ($clientslist as $client) {
                                                                $res .= '<option value="' . $client['userId'] . '">' . $client['userName'] . '</option>';
                                                                $num++;
                                                            }
                                                        } else {
                                                            $res .= '<option value="Please add clients first">Please add clients first</option>';
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
                                                        <a align="left">Product Description: </a>
                                                        <textarea id="productDescription" class="form-control"
                                                            name="productDescription" required="required"> </textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <input placeholder="Product Version:" type="text"
                                                            id="productVersion" class="form-control"
                                                            name="productVersion" value="" required="required" />
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <?php
                                                        $count = count($moduleslist);
                                                        $data = '<label for="productModules" class="control-label">Product modules : <span class="required" style="color:red;">*</span></label>
                                       <select id="select1" class="form-control"  multiple size="' . $count . '">';

                                                        if ($count > 0) {
                                                            $number = 1;
                                                            foreach ($moduleslist as $module) {
                                                                $data .= '<option value="' . $module['moduleId'] . '">' . $module['moduleName'] . '</option>';

                                                                $number++;
                                                            }
                                                        } else {
                                                            $data .= '<option value="Please add modules first">Please add modules first</option>
                             </br>';
                                                        }

                                                        $data .= '</select><a href="#" id="add">add &gt;&gt;</a></div><select id="select2"class="form-control" name="modules[]" multiple></select><a href="#" id="remove">&lt;&lt; remove</a><br>';
                                                        echo $data;

                                                        ?>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">

                                                            <input type="submit" class="btn btn-primary"
                                                                name="addproduct" value="Save" />
                                                        </div>
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

    <script>
        $().ready(function () {
            $('#add').click(function () {
                return !$('#select1 option:selected').remove().appendTo('#select2');
            });
            $('#remove').click(function () {
                return !$('#select2 option:selected').remove().appendTo('#select1');
            });
        });
    </script>
    <script>
        $('#select3').select2();
    </script>



</body>

</html>