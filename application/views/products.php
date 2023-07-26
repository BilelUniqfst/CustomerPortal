<!-- Start Banner 
    ============================================= -->
<div class="shape-right top-pad-50 bg-gray text-combo" style="top:400px;">
    <div class="item">
        <div class="box-table" style="margin-top: 50px;">

            <div align="right"><a href="addproduct" class="btn btn-primary" style="style = top:10px;">New Product</a>
            </div>

            <?php //$user=new User($userId, $userName, $userFirstname, $userLastname, $userEmail, $userAddress, $userPassword, $userRole);
                    
                    $data = '<table id="productstable" class="table table-bordered table-hover" cellspacing="0" width="100%"> <thead> <tr>
                              <th data-defaultsign="_19">Product id </th>
                              <th data-defaultsign="_19"> Client id  </th>
                              <th data-defaultsign="AZ">Product name </th>
                              <th data-defaultsign="AZ">Product description </th>
                              <th data-defaultsign="_19">Product version </th>
                              <th data-defaultsign="AZ">Modules </th>
                              </tr> </thead>';
                    if ($_SESSION['userRole'] == 'ADMIN') {

                        if (count($products) > 0) {
                            $number = 1;
                            $x = "";
                            $modulesbyproduct = array();


                            foreach ($products as $product) {

                                if (!array_key_exists($product['productId'], $modulesbyproduct)) {
                                    $modulesbyproduct[$product['productId']] = $product['moduleName'];
                                } else {
                                    $modulesbyproduct[$product['productId']] = $modulesbyproduct[$product['productId']] . ',' . $product['moduleName'];
                                }
                            }

                            $traversedProducts = array();

                            foreach ($products as $product) {

                                if (in_array($product['productId'], $traversedProducts)) {
                                    continue;
                                }
                                $traversedProducts[$product['productId']] = $product['productId'];

                                $modules = explode(',', $modulesbyproduct[$product['productId']]);
                                $n = count($modules);

                                $data .= '<tbody><tr>
            <td rowspan="' . $n . '">' . $product['productId'] . '</td>
            <td rowspan="' . $n . '">' . $product['productclientId'] . '</td>
            <td rowspan="' . $n . '">' . $product['productName'] . '</td>
            <td rowspan="' . $n . '">' . $product['productDescription'] . '</td>
            <td rowspan="' . $n . '">' . $product['productVersion'] . '</td>';
            $data .= '<td>';
                                foreach ($modules as $module) {
                                    $data .= $module."/";
                                }
                                $data .= '</td></tr></tbody>';





                            }
                        } else {
                            $data .= '<tr><td colspan="6">Records not found!</td></tr>';
                        }
                        $data .= '</table>';

                        echo $data;
                    } else if ($_SESSION['userRole'] == 'CLIENT') {

                        if (count($clientproducts) > 0) {
                            $number = 1;
                            $x = "";
                            $modulesbyproduct = array();


                            foreach ($clientproducts as $product) {

                                if (!array_key_exists($product['productId'], $modulesbyproduct)) {
                                    $modulesbyproduct[$product['productId']] = $product['moduleName'];
                                } else {
                                    $modulesbyproduct[$product['productId']] = $modulesbyproduct[$product['productId']] . ',' . $product['moduleName'];
                                }
                            }

                            $traversedProducts = array();

                            foreach ($clientproducts as $product) {

                                if (in_array($product['productId'], $traversedProducts)) {
                                    continue;
                                }
                                $traversedProducts[$product['productId']] = $product['productId'];

                                $modules = explode(',', $modulesbyproduct[$product['productId']]);
                                $n = count($modules);

                                $data .= '<tbody><tr>
            <td rowspan="' . $n . '">' . $product['productId'] . '</td>
            <td rowspan="' . $n . '">' . $product['productclientId'] . '</td>
            <td rowspan="' . $n . '">' . $product['productName'] . '</td>
            <td rowspan="' . $n . '">' . $product['productDescription'] . '</td>
            <td rowspan="' . $n . '">' . $product['productVersion'] . '</td>';
                                foreach ($modules as $module) {
                                    $data .= '<td>' . $module . '</td>';
                                }
                                $data .= '</tr></tbody>';





                            }
                        } else {
                            $data .= '<tr><td colspan="6">Records not found!</td></tr>';
                        }
                        $data .= '</table>';

                        echo $data;
                    }
                    ?>





        </div>
    </div>
</div>
<!-- End Banner -->

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

<?php
if (count($products) != 0)
{
    echo 
    '
    <script>
    $(document).ready(function () {
    $('.'#productstable'.').DataTable({
        "scrollX": true,
        "searching": false,
        "info": false,
        "paging": false,
        "pageResize": true,
        "scrollCollapse": true,
        language: {
            searchPanes: {
                emptyPanes: '.'There are no tickets to display. :/'
            .'}
                }
            });
            });
        </script>

    ';
}
 ?> 

</body>

</html>