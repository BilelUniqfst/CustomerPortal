<!-- Start Banner 
    ============================================= -->
<div class="shape-right top-pad-50 bg-gray text-combo" style="top:400px;">
    <div class="item">
        <div class="table-box" style="margin-top: 50px;">

            <?php if ($_SESSION['userRole'] == 'CLIENT') {
                echo '<div align="right"><a href="sendticket" class="btn btn-primary" style="style = top:10px;">New Ticket</a></div>';
            } ?>

            
            <?php $data = '<table id="ticketstable" class="table table-bordered table-hover" cellspacing="0" width="100%"> <thead> <tr>
                              <th data-defaultsign="_19">Ticket Id </th>
                              <th data-defaultsign="AZ"> Client Name  </th>
                              <th data-defaultsign="AZ">Product Name </th>
                              <th data-defaultsign="AZ">Module Name </th>
                              <th data-defaultsign="AZ">Ticket Description </th>
                              <th data-defaultsign="AZ">Ticket Status </th>
                              <th data-defaultsign="AZ">Assigned To </th>
                              <th data-defaultsign="month">Opening Date </th>
                              <th data-defaultsign="month">Closing Date </th>
                              <th>Attachment </th>
                              <th>Message</th>
                              <th>Patch</th>';
            if ($_SESSION['userRole'] != 'CLIENT') {
                $data .= '<th>Edit</th>';
            }

            if ($_SESSION['userRole'] == 'ADMIN') {
                if (count($admintickets) > 0) {
                    $number = 1;
                    foreach ($admintickets as $ticket) {

                        $data .= '<tbody><tr>
    <td>' . $ticket['ticketId'] . '</td>
    <td value="' . $ticket['ticketuserId'] . '">' . $ticket['userName'] . '</td>
    <td value="' . $ticket['ticketproductId'] . '">' . $ticket['productName'] . '</td>
    <td value="' . $ticket['ticketmoduleId'] . '">' . $ticket['moduleName'] . '</td>
    <td>' . $ticket['ticketDescription'] . '</td>';
                        if ($ticket['ticketStatus'] == 'NEW') {
                            $data .= '<td><span class="label label-danger">' . $ticket['ticketStatus'] . '</span></td>';
                        } else if ($ticket['ticketStatus'] == 'PENDING') {
                            $data .= '<td><span class="label label-warning">' . $ticket['ticketStatus'] . '</span></td>';
                        } else if ($ticket['ticketStatus'] == 'CLOSED') {
                            $data .= '<td><span class="label label-success">' . $ticket['ticketStatus'] . '</span></td>';
                        }


                        $data .= '<td>' . $ticket['ticketassignedTo'] . '</td>
                        <td>' . $ticket['ticketopeningDate'] . '</td>';

                        if ($ticket['ticketclosingDate'] == '' || $ticket['ticketclosingDate'] == null)
                        {
                            $data .= '<td>---</td>';
                        } else
                            $data .= '<td>' . $ticket['ticketclosingDate'] . '</td>';

                        
                        if ($ticket['ticketAttachment'] !== '') {
                            $data .= '<td><a href="tickets/downloadattachement?attachement=' . $ticket['ticketAttachment'] . '">View the attachment </a></td>';
                        } else {
                            $data .= '<td>' . '---' . '</td>';
                        }
                        

                        if ($ticket['messages'] !== '' && $ticket['messages'] !== '0') {
                            $data .= '<td>'. $ticket['messages'] .'</td>';
                        } else {
                            $data .= '<td>' . '---' . '</td>';
                        }


                        if ($ticket['ticketPatch'] !== '' && $ticket['ticketPatch'] !== '0') {
                            $data .= '<td><a href="tickets/downloadpatch?attachement=' . $ticket['ticketPatch'] . '">View the patch </a></td>';
                        } else {
                            $data .= '<td>' . '---' . '</td>';
                        }

                        if ($_SESSION['userRole'] !== 'CLIENT') {
                            if ($ticket['ticketStatus'] == 'CLOSED') {
                                $data .= '<td><a href="" class="label label-primary" >Edit</a></td>';
                            } else {
                                $data .= '<td><a href="admineditticket/ticket/' . $ticket['ticketId'] . '"class="label label-primary" style="">Edit</a></td>';
                            }
                        }
                        $number++;


                    }
                } else {
                    $data .= '<tbody><tr><td colspan="6">Records not found!</td></tr></tbody>';
                }
                $data .= '</table>';

                echo $data;
            } else if ($_SESSION['userRole'] == 'DEVELOPER') {
                if (count($developertickets) > 0) {
                    $number = 1;
                    foreach ($developertickets as $ticket) {

                        $data .= '<tbody><tr>
    <td>' . $ticket['ticketId'] . '</td>
    <td value="' . $ticket['ticketuserId'] . '">' . $ticket['userName'] . '</td>
    <td value="' . $ticket['ticketproductId'] . '">' . $ticket['productName'] . '</td>
    <td value="' . $ticket['ticketmoduleId'] . '">' . $ticket['moduleName'] . '</td>
    <td>' . $ticket['ticketDescription'] . '</td>';
                        if ($ticket['ticketStatus'] == 'NEW') {
                            $data .= '<td><span class="label label-danger">' . $ticket['ticketStatus'] . '</span></td>';
                        } else if ($ticket['ticketStatus'] == 'PENDING') {
                            $data .= '<td><span class="label label-warning">' . $ticket['ticketStatus'] . '</span></td>';
                        } else if ($ticket['ticketStatus'] == 'CLOSED') {
                            $data .= '<td><span class="label label-success">' . $ticket['ticketStatus'] . '</span></td>';
                        }


                        $data .= '<td>' . $ticket['ticketassignedTo'] . '</td>
                        <td>' . $ticket['ticketopeningDate'] . '</td>';

                        if ($ticket['ticketclosingDate'] == '' || $ticket['ticketclosingDate'] == null)
                        {
                            $data .= '<td>---</td>';
                        } else
                            $data .= '<td>' . $ticket['ticketclosingDate'] . '</td>';


                        if ($ticket['ticketAttachment'] !== '') {
                            $data .= '<td><a href="tickets/downloadattachement?attachement=' . $ticket['ticketAttachment'] . '">View the attachment </a></td>';
                        } else {
                            $data .= '<td>' . '---' . '</td>';
                        }

                        if ($ticket['messages'] !== '' && $ticket['messages'] !== '0') {
                            $data .= '<td>'. $ticket['messages'] .'</td>';
                        } else {
                            $data .= '<td>' . '---' . '</td>';
                        }

                        if ($ticket['ticketPatch'] !== '' && $ticket['ticketPatch'] !== '0') {
                            $data .= '<td><a href="tickets/downloadpatch?attachement=' . $ticket['ticketPatch'] . '">View the patch </a></td>';
                        } else {
                            $data .= '<td>' . '---' . '</td>';
                        }
                        if ($_SESSION['userRole'] !== 'CLIENT') {
                            if ($ticket['ticketStatus'] == 'CLOSED') {
                                $data .= '<td><a href="" class="label label-primary" >Edit</a></td>';
                            } else {
                                $data .= '<td><a href="developereditticket/ticket/' . $ticket['ticketId'] . '"class="label label-primary" style="">Edit</a></td>';
                            }
                        }
                        
                        $number++;


                    }
                } else {
                    $data .= '<tbody><tr><td colspan="6">Records not found!</td></tr></tbody>';
                }
                $data .= '</table>';

                echo $data;
            } else if ($_SESSION['userRole'] == 'CLIENT') {

                if (count($clienttickets) > 0) {
                    $number = 1;
                    foreach ($clienttickets as $ticket) {

                        $data .= '<tbody><tr>
    <td>' . $ticket['ticketId'] . '</td>
    <td>' . $ticket['userName'] . '</td>
    <td>' . $ticket['productName'] . '</td>
    <td>' . $ticket['moduleName'] . '</td>
    <td>' . $ticket['ticketDescription'] . '</td>';
                        if ($ticket['ticketStatus'] == 'NEW') {
                            $data .= '<td><span class="label label-danger">' . $ticket['ticketStatus'] . '</span></td>';
                        } else if ($ticket['ticketStatus'] == 'PENDING') {
                            $data .= '<td><span class="label label-warning">' . $ticket['ticketStatus'] . '</span></td>';
                        } else if ($ticket['ticketStatus'] == 'CLOSED') {
                            $data .= '<td><span class="label label-success">' . $ticket['ticketStatus'] . '</span></td>';
                        }


                        $data .= '<td>' . $ticket['ticketassignedTo'] . '</td>
                        <td>' . $ticket['ticketopeningDate'] . '</td>';

                        if ($ticket['ticketclosingDate'] == '' || $ticket['ticketclosingDate'] == null)
                        {
                            $data .= '<td>---</td>';
                        } else
                            $data .= '<td>' . $ticket['ticketclosingDate'] . '</td>';

                        if ($ticket['ticketAttachment'] !== '') {
                            $data .= '<td><a href="tickets/downloadattachement?attachement=' . $ticket['ticketAttachment'] . '">View the attachment </a></td>';
                        } else {
                            $data .= '<td> --- </td>';
                        }

                        if ($ticket['messages'] !== '' && $ticket['messages'] !== '0') {
                            $data .= '<td>'. $ticket['messages'] .'</td>';
                        } else {
                            $data .= '<td>' . '---' . '</td>';
                        }
                        
                        if ($ticket['ticketPatch'] == "Please provide more information") {
                            $data .= '<td><a href="clienteditticket/ticket/' . $ticket['ticketId'] . '"class="label label-primary" style="">Edit</a></td>';
                        }


                        $data .= '</tr></tbody>';
                        $number++;

                    }

                } else {
                    $data .= '<tbody><tr><td colspan="6">Records not found!</td></tr></tbody>';
                }
                $data .= '</table>';

                echo $data;

            }


            ?>

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php
                    echo '<li class="page-item"><a class="page-link" href="tickets?pagination='.(string) ($_GET['pagination'] - 1).'">Previous</a></li>';
                    for ($i = 1; $i <= (floor($rowcount / 50)) + 1; $i++) {
                        echo '<li class="page-item"><a class="page-link" href="tickets?pagination='.$i.'">'.$i.'</a></li>';
                    }
                    echo '<li class="page-item"><a class="page-link" href="tickets?pagination='.(string) ($_GET['pagination'] + 1).'">Next</a></li>';
                    
                    ?>

                </ul>
            </nav>

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
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>

<?php
if ($rowcount != 0)
{
    echo 
    '
    <script>
    $(document).ready(function () {
    $('.'#ticketstable'.').DataTable({
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