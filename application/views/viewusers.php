<!-- Start Banner 
    ============================================= -->
<div class="shape-right top-pad-50 bg-gray text-combo" style="top:400px;">
    <div class="item">
        <div class="box-table" style="margin-top: 50px;">

            <div align="right"><a href="adduser" class="btn btn-primary" style="style = top:10px;">New user</a></div>

            <?php //$user=new User($userId, $userName, $userFirstname, $userLastname, $userEmail, $userAddress, $userPassword, $userRole);
            
            $data = '<table id="userstable" class="table table-bordered table-hover" cellspacing="0" width="100%"> <thead> <tr> 
                              <th data-defaultsign="AZ">Picture</th>
                              <th data-defaultsign="_19">Id</th>
                              <th data-defaultsign="AZ">Username</th>
                              <th data-defaultsign="AZ">Role</th>
                              <th data-defaultsign="AZ">First name</th>
                              <th data-defaultsign="AZ">Last name</th>
                              <th data-defaultsign="AZ">E-mail</th>
                              <th data-defaultsign="AZ">Address</th>
                              </tr> </thead>';

            if (count($users) > 0) {
                $number = 1;
                foreach ($users as $user) {
                    $data .= '<tbody><tr>
                                 <div class="profile-pic">
         
            <td>

<img class="img"  src="' . $user['userPicture'] . '" alt="" style="  width: 20%;
height: auto;
border-radius: 20% 20%;
"/></td>                     
            <td>' . $user['userId'] . '</td>
            <td>' . $user['userName'] . '</td>
            <td>' . $user['userRole'] . '</td>
            <td>' . $user['userFirstname'] . '</td>
            <td>' . $user['userLastname'] . '</td>
            <td>' . $user['userEmail'] . '</td>
            <td>' . $user['userAddress'] . '</td>
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
if (count($users) != 0)
{
    echo 
    '
    <script>
    $(document).ready(function () {
    $('.'#userstable'.').DataTable({
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