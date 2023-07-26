<!DOCTYPE html>
            
         <section id="main-content" style="position:relative;bottom:100%;">
          <section class="wrapper">            
              <!--overview start-->
              
                 <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <div class="panel-heading">
                              <h2> Reports </h2>
                          
                         </div>
                          <div class="panel-body">
                         
                              
                        <div class="responsiveChart" align="center">
    
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h2 align=""> Ticket Status </h2> <br> <br> <br> <br><br> <br>
    
     
          <?php

          $new = ticketNew($con);
          $newt = count($new);

          $pending = ticketPending($con);
          $pendingt = count($pending);
          $closed = ticketClosed($con);
          $closedt = count($closed);

          ?>
        
        <div class="pieID pie"></div>
        <div class="pieafter">
          
        </div>
        <ul class="chartM pieID legend">
         
          <li class="hides">
            <em>New</em>
            <span><?php echo $newt; ?></span>
          </li>
          <li>
            <em>Pending</em>
            <span><?php echo $pendingt; ?></span>
          </li>
          <li>
            <em>Closed</em>
            <span><?php echo $closedt; ?></span>
          </li>
        </ul>
        <br>
        <br>
        <br>
      
   
</div>      
                            <div class="responsiveChart" align="center">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                
                                    <h2 align="">Average time for closing tickets </h2> <br> <br> 
                                <?php

                                $ticketsd = CountTime($con);
                                $res = 0;
                                $n = count($ticketsd);

                                foreach ($ticketsd as $ticketd) {
                                    $res += (strtotime($ticketd['ticketclosingDate']) - strtotime($ticketd['ticketopeningDate']));
                                }
                                $average = $res / count($n);
                                $days = floor($average / 86400);
                                $hours = floor(($average % 86400) / 3600);
                                $minutes = floor(($average % 3600) / 60);
                                $seconds = $average % 60; ?>
                                    <h3 style="color: #0055b3;">
                                   <?php echo $days . ' day' . ($days > 0 ? 's' : '') . ', ';
                                   echo $hours . ' hour' . ($hours > 0 ? 's' : '') . ', ';
                                   echo $minutes . ' minute' . ($minutes > 0 ? 's' : '') . ', ';
                                   echo $seconds . ' second' . ($seconds > 0 ? 's' : ''); ?> 
                                    </h3>
                                </div>
                                <br> <br></div>
                        
                  <div class="responsiveChart" align="center">
             <?php $ticket = ticketTotal($con);
             $tickets = count($ticket);

             $AccountingEngine = ticketAccountingEngine($con);
             $AccountingsEngines = count($AccountingEngine);

             $Recevable = ticketRecevables($con);
             $Recevables = count($Recevable);
             $FixedAsset = ticketFixedAssets($con);
             $FixedAssets = count($FixedAsset);

             $StockControl = ticketStockControl($con);
             $StockControls = count($StockControl);
             $Treasury = ticketTreasury($con);
             $Treasurys = count($Treasury);
             $Payroll = ticketPayroll($con);
             $Payrolls = count($Payroll);
             $Tax = ticketTax($con);
             $Taxs = count($Tax);
             $Analytic = ticketAnalytic($con);
             $Analytics = count($Analytic);
             $MultiEntitie = ticketMultiEntitie($con);
             $MultiEntities = count($MultiEntitie);
             $CBI = ticketCBI($con);
             $CBIs = count($CBI);
             $MBI = ticketMBI($con);
             $MBIs = count($MBI);
             $FinancialSE = ticketFinancialSE($con);
             $FinancialSEs = count($FinancialSE);
             $FinancialEE = ticketFinancialEE($con);
             $FinancialEEs = count($FinancialEE);
             ?>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                
                                    <h2 align="left">Percentage of tickets per module </h2> <br> <br>
                            <div id="chart">
  <ul id="numbers">
    <li><span>100%</span></li>
    <li><span>90%</span></li>
    <li><span>80%</span></li>
    <li><span>70%</span></li>
    <li><span>60%</span></li>
    <li><span>50%</span></li>
    <li><span>40%</span></li>
    <li><span>30%</span></li>
    <li><span>20%</span></li>
    <li><span>10%</span></li>
    <li><span>0%</span></li>
  </ul>
  
  <ul id="bars">
    <?php if ($AccountingsEngines > 0) {
        echo '<li><div data-percentage="' . ($AccountingsEngines * 100) / $tickets . '" class="bar" style="height:' . ($AccountingsEngines * 100) / $tickets . ';"></div><span>Accounting-Engine</span></li>';
    } ?>
    <?php if ($FixedAssets > 0) {
        echo '<li><div data-percentage="' . ($FixedAssets * 100) / $tickets . '" class="bar" style="height:' . ($FixedAssets * 100) / $tickets . ';"></div><span>Fixed Assets</span></li>';
    } ?>
    <?php if ($Recevables > 0) {
        echo '<li><div data-percentage="' . ($Recevables * 100) / $tickets . '" class="bar" style="height:' . ($Recevables * 100) / $tickets . ';"></div><span>Recevables</span></li>';
    } ?>
    <?php if ($StockControls > 0) {
        echo '<li><div data-percentage=" ' . ($StockControls * 100) / $tickets . '" class="bar" style="height:' . ($StockControls * 100) / $tickets . ';"></div><span>Stock Control</span></li>';
    } ?>
    <?php if ($Treasurys > 0) {
        echo '<li><div data-percentage="' . ($Treasurys * 100) / $tickets . '" class="bar" style="height:' . ($Treasurys * 100) / $tickets . ';"></div><span>Treasury</span></li>';
    } ?>
    <?php if ($Payrolls > 0) {
        echo '<li><div data-percentage="' . ($Payrolls * 100) / $tickets . '" class="bar" style="height:' . ($Payrolls * 100) / $tickets . ';"></div><span>Payroll</span></li>';
    } ?>
    <?php if ($Taxs > 0) {
        echo '<li><div data-percentage=" ' . ($Taxs * 100) / $tickets . '" class="bar" style="height:' . ($Taxs * 100) / $tickets . ';"></div><span>Tax</span></li>';
    } ?>
    <?php if ($Analytics > 0) {
        echo '<li><div data-percentage="' . ($Analytics * 100) / $tickets . '" class="bar" style="height:' . ($Analytics * 100) / $tickets . ';"></div><span>Analytics</span></li>';
    } ?>
    <?php if ($MultiEntities > 0) {
        echo '<li><div data-percentage="' . ($MultiEntities * 100) / $tickets . '" class="bar" style="height:' . ($MultiEntities * 100) / $tickets . ';"></div><span>Multi-Entities</span></li>';
    } ?>
    <?php if ($CBIs > 0) {
        echo '<li><div data-percentage=" ' . ($CBIs * 100) / $tickets . '" class="bar" style="height:' . ($CBIs * 100) / $tickets . ';"></div><span>CBI</span></li>';
    } ?>
    <?php if ($MBIs > 0) {
        echo '<li><div data-percentage="' . ($MBIs * 100) / $tickets . '" class="bar" style="height:' . ($MBIs * 100) / $tickets . ';"></div><span>CBI</span></li>';
    } ?>
    <?php if ($FinancialSEs > 0) {
        echo '<li><div data-percentage="' . ($FinancialSEs * 100) / $tickets . '" class="bar" style="height:' . ($FinancialSEs * 100) / $tickets . ';"></div><span>Financial-SE</span></li>';
    } ?>
    <?php if ($FinancialEEs > 0) {
        echo '<li><div data-percentage="' . ($FinancialEEs * 100) / $tickets . ';"></div><span>Financial-EE</span></li>';
    } ?>
  
  </ul>
</div> 
                            <br>
                            <br>
                        
                        </div>
                  </div>
                                   <br>
        <br>
        <br>
                            
                            
  <div class="responsiveChart" align="center">
    
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h2 align=""> Tickets Mohamed </h2> <br> <br> <br> <br><br> <br>
    
     
          <?php

          $mednew = ticketmohamednew($con);
          $mednewc = count($mednew);

          $medpending = ticketmohamedpending($con);
          $medpendingc = count($medpending);
          $medclosed = ticketmohamedclosed($con);
          $medclosedc = count($medclosed);

          ?>
        
        <div class="pieID pie"></div>
        <div class="pieafter">
          
        </div>
        <ul class="chartM pieID legend">
         
          <li class="hides">
            <em>New</em>
            <span><?php echo $mednewc; ?></span>
          </li>
          <li>
            <em>Pending</em>
            <span><?php echo $medpendingc; ?></span>
          </li>
          <li>
            <em>Closed</em>
            <span><?php echo $medclosedc; ?></span>
          </li>
        </ul>
        <br>
        <br>
        <br>
      
   
                             
                            
                            
                            
                            </div>
  </div>
                             <div class="responsiveChart" align="center">
    
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h2 align=""> Tickets Wajdi </h2> <br> <br> <br> <br><br> <br>
    
     
          <?php

          $wajnew = ticketwajdinew($con);
          $wajnewc = count($wajnew);

          $wajpending = ticketwajdipending($con);
          $wajpendingc = count($wajpending);
          $wajclosed = ticketwajdiclosed($con);
          $wajclosedc = count($wajclosed);

          ?>
        
        <div class="pieID pie"></div>
        <div class="pieafter">
          
        </div>
        <ul class="chartM pieID legend">
         
          <li class="hides">
            <em>New</em>
            <span><?php echo $wajnewc; ?></span>
          </li>
          <li>
            <em>Pending</em>
            <span><?php echo $wajpendingc; ?></span>
          </li>
          <li>
            <em>Closed</em>
            <span><?php echo $wajclosedc; ?></span>
          </li>
        </ul>
        <br>
        <br>
        <br>
      
   
                             
                            
                            
                            
                            </div>
  </div> 
                            
                            
                              
    
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h2 align=""> Tickets Mahdi </h2> <br> <br> <br> <br><br> <br>
    
     
          <?php

          $mahnew = ticketmahdinew($con);
          $mahnewc = count($mahnew);

          $mahpending = ticketmahdipending($con);
          $mahpendingc = count($mahpending);
          $mahclosed = ticketmahdiclosed($con);
          $mahclosedc = count($mahclosed);

          ?>
        
        <div class="pieID pie"></div>
        <div class="pieafter">
          
        </div>
        <ul class="chartM pieID legend">
         
          <li class="hides">
            <em>New</em>
            <span><?php echo $mahnewc; ?></span>
          </li>
          <li>
            <em>Pending</em>
            <span><?php echo $mahpendingc; ?></span>
          </li>
          <li>
            <em>Closed</em>
            <span><?php echo $mahclosedc; ?></span>
          </li>
        </ul>
        <br>
        <br>
        <br>
      
   
                             
                            
                            
                            
                            </div>
  </div>
                            
                        
                              
                              
                              
                              
  <div class="responsiveChart" align="center">
    
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h2 align=""> Tickets Hamza </h2> <br> <br> <br> <br><br> <br>
    
     
          <?php

          $hamnew = tickethamzanew($con);
          $hamnewc = count($hamnew);

          $hampending = tickethamzapending($con);
          $hampendingc = count($hampending);
          $hamclosed = tickethamzaclosed($con);
          $hamclosedc = count($hamclosed);

          ?>
        
        <div class="pieID pie"></div>
        <div class="pieafter">
          
        </div>
        <ul class="chartM pieID legend">
         
          <li class="hides">
            <em>New</em>
            <span><?php echo $hamnewc; ?></span>
          </li>
          <li>
            <em>Pending</em>
            <span><?php echo $hampendingc; ?></span>
          </li>
          <li>
            <em>Closed</em>
            <span><?php echo $hamclosedc; ?></span>
          </li>
        </ul>
        <br>
        <br>
        <br>
</div>
  </div>



  <div class="responsiveChart" align="center">
    
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h2 align=""> Tickets Lobna </h2> <br> <br> <br> <br><br> <br>
    
     
          <?php

          $lobnew = ticketlobnanew($con);
          $lobnewc = count($lobnew);

          $lobpending = ticketlobnapending($con);
          $lobpendingc = count($lobpending);
          $lobclosed = ticketlobnaclosed($con);
          $lobclosedc = count($lobclosed);

          ?>
        
        <div class="pieID pie"></div>
        <div class="pieafter">
          
        </div>
        <ul class="chartM pieID legend">
         
          <li class="hides">
            <em>New</em>
            <span><?php echo $lobnewc; ?></span>
          </li>
          <li>
            <em>Pending</em>
            <span><?php echo $lobpendingc; ?></span>
          </li>
          <li>
            <em>Closed</em>
            <span><?php echo $lobclosedc; ?></span>
          </li>
        </ul>
        <br>
        <br>
        <br>
</div>
  </div>
                              
                              
                                <div class="responsiveChart" align="center">
    
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h2 align=""> Ticket Sarah </h2> <br> <br> <br> <br><br> <br>
    
     
          <?php

          $sarnew = ticketsarahnew($con);
          $sarnewc = count($sarnew);

          $sarpending = ticketsarahpending($con);
          $sarpendingc = count($sarpending);
          $sarclosed = ticketsarahclosed($con);
          $sarclosedc = count($sarclosed);

          ?>
        
        <div class="pieID pie"></div>
        <div class="pieafter">
          
        </div>
        <ul class="chartM pieID legend">
         
          <li class="hides">
            <em>New</em>
            <span><?php echo $sarnewc; ?></span>
          </li>
          <li>
            <em>Pending</em>
            <span><?php echo $sarpendingc; ?></span>
          </li>
          <li>
            <em>Closed</em>
            <span><?php echo $sarclosedc; ?></span>
          </li>
        </ul>
        <br>
        <br>
        <br>
</div>
  </div> 
                              
                              
                              
                              
                              
                              
                          </div>
                      </section>
                  </div>
                 
                 </div>
        
          
        
          </section>
                 
           
          
              
         </section>
   <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script> 
  <!-- javascripts -->
  <script src="scripts/jquery.js"></script>
  <script src="scripts/main.js"></script>
<script language="javascript" type="text/javascript">
function openWindow(href) {
  window.open(href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=500,height=370');
  return false;
}
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

    <script src="charts/js/index.js"></script>
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="animated-bar-chart/js/index.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"> </script>
<script src='http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js'></script>
<script src="scripts/menu.js"></script>
    </body>
</html>
