     <?php
$q = $_GET['q'];


$con = mysqli_connect("localhost", "root", "", "main_project");
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"main_project");
                        $query="SELECT pallet_id,SUM(qty)as qty FROM pallet_informations WHERE category='$q' GROUP BY pallet_id ORDER BY pallet_id ASC";
                        $query_run = mysqli_query($con, $query);
                        $id=0;
                        $qty=0;
                        foreach($query_run as $data){
                            $id=$data['pallet_id'];
                            $qty=$data['qty'];
                        }
if($q== 'keyboard'){
    $q=2;
}elseif($q== 'charger'){
    $q=4;
}elseif($q== 'mouse'){
    $q=3;
}elseif($q== 'monitor'){
    $q=1;
}elseif($q== 'desktop'){
    $q=5;
}
?>

     <?php if($q==1){?>
     <!-- Monitor -->
     <div class='tab-pane fade show  ' id='nav-monitor' role='tabpanel' aria-labelledby='nav-monitor-tab'>
         <div class='row' style='justify-content: flex-end;'>
             <div>
                 <button type='submit' class='btnT mr-4 mb-2'><i class='fa-solid fa-download'></i> Download
                     Excel</button>
             </div>
             <div class='col-12'>
                 <div class='row'>
                     <div class='tableSec'>
                         <table class='table ml-3 table-hover text-center'>
                             <thead>
                                 <tr>
                                     <th style='width:50%;'>Pallet No</th>
                                     <th>Qty</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>
                                         <a href='./inventory_monitor_model_table.php?id=<?php echo $id ?>'>
                                             <?php echo $id ?>
                                         </a>
                                     </td>
                                     <td> <?php echo $qty ?></td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     </div>
     <?php } if($q==5){ ?>
     <!-- Desktop -->
     <div class="tab-pane fade show" id="nav-desktop" role="tabpanel" aria-labelledby="nav-desktop-tab">
         <div class="row" style="justify-content: flex-end;">
             <div>
                 <button type="submit" class="btnT mr-4 mb-2"><i class="fa-solid fa-download"></i> Download
                     Excel</button>
             </div>
             <div class="col-12">
                 <div class="row">
                     <div class="tableSec">
                         <table class="table mx-3 table-hover text-center">
                             <thead>
                                 <tr>
                                     <th style="width:50%;">Pallet No</th>
                                     <th>Qty</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>
                                         <a href="./inventory_desktop_model_table.php?id=<?php echo $id ?>">
                                             <?php echo $id ?>
                                         </a>
                                     </td>
                                     <td> <?php echo $qty ?></td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>


     </div>
     <?php } if($q==2){ ?>
     <!-- Keyboard -->
     <div class="tab-pane fade show " id="nav-keyboard" role="tabpanel" aria-labelledby="nav-keyboard-tab">
         <div class="row" style="justify-content: flex-end;">
             <div>
                 <button type="submit" class="btnT mr-4 mb-2"><i class="fa-solid fa-download"></i> Download
                     Excel</button>
             </div>
             <div class="col-12">
                 <div class="row">
                     <div class="tableSec">
                         <table class="table mx-3 table-hover text-center">
                             <thead>
                                 <tr>
                                     <th style="width:50%;">Pallet No</th>
                                     <th>Qty</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>
                                         <a href="./inventory_keyboard_model_table.php?id=<?php echo $id ?>">
                                             <?php echo $id ?>
                                         </a>
                                     </td>
                                     <td> <?php echo $qty ?></td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <?php } if($q==3){ ?>
     <!-- Mouse -->
     <div class="tab-pane fade show " id="nav-mouse" role="tabpanel" aria-labelledby="nav-mouse-tab">
         <div class="row" style="justify-content: flex-end;">
             <div>
                 <button type="submit" class="btnT mr-4 mb-2"><i class="fa-solid fa-download"></i> Download
                     Excel</button>
             </div>
             <div class="col-12">
                 <div class="row">
                     <div class="tableSec">
                         <table class="table mx-3 table-hover text-center">
                             <thead>
                                 <tr>
                                     <th style="width:50%;">Pallet No</th>
                                     <th>Qty</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>
                                         <a href="./inventory_mouse_model_table.php?id=<?php echo $id ?>">
                                             <?php echo $id ?>
                                         </a>
                                     </td>
                                     <td> <?php echo $qty ?></td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <?php } if($q==4){ ?>
     <!-- Charger -->
     <div class="tab-pane fade show " id="nav-charger" role="tabpanel" aria-labelledby="nav-charger-tab">
         <div class="row" style="justify-content: flex-end;">
             <div>
                 <button type="submit" class="btnT mr-4 mb-2"><i class="fa-solid fa-download"></i> Download
                     Excel</button>
             </div>
             <div class="col-12">
                 <div class="row">
                     <div class="tableSec">
                         <table class="table mx-3 table-hover text-center">
                             <thead>
                                 <tr>
                                     <th style="width:50%;">Pallet No</th>
                                     <th>Qty</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>
                                         <a href="./inventory_charger_model_table.php?id=<?php echo $id ?>">
                                             <?php echo $id ?>
                                         </a>
                                     </td>
                                     <td> <?php echo $qty ?></td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <?php } 
     mysqli_close($con)?>