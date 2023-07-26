<!-- Start Banner 
    ============================================= -->
<div class="shape-right top-pad-50 bg-gray text-combo" style="top:400px;">
    <div class="item">
        <div class="box-table" style="margin-top: 50px;">

            <div align="right">
                <a href="addmodule" class="btn btn-primary" style="style = top:10px;">New Product</a>
            </div>

            <?php

            $data = '<table id="modulestable" class="table table-bordered table-hover" cellspacing="0" width="100%"> <thead> <tr>
                      <th data-defaultsign="_19">Module id</th>
                      <th data-defaultsign="AZ">Module name</th>
                      </tr> </thead>';

            if (count($modules) > 0) {
                $number = 1;
                foreach ($modules as $module) {
                    $data .= '<tbody><tr>
    <td>' . $module['moduleId'] . '</td>
    <td>' . $module['moduleName'] . '</td>
    </tr></tbody>'
                    ;
                    $number++;


                }
            } else {
                $data .= '<tr><td colspan="6">Records not found!</td></tr>';
            }
            $data .= '</table>';

            echo $data;

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
if (count($modules) != 0)
{
    echo 
    '
    <script>
    $(document).ready(function () {
    $('.'#modulestable'.').DataTable({
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