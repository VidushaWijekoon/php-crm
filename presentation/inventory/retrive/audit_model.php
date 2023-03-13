  <style>
.pageNameIcon {
    font-size: 25px;
    margin-right: 05px;
}

.pageName {
    font-size: 20px;
    margin-top: 5px;
    font-weight: bold;
}

.cardContainer {
    width: 99%;
    background-color: #ffffff;
    padding: 10px 5px;
}

.createListingHeading {
    font-weight: 600;
    font-size: 15px;
}

.sectionUnderline {
    margin-top: 0px;
    margin-bottom: 0;
    border-top: 2px solid #DBDBDB;
}

.sectionUnderlineModel {
    margin-top: 0px;
}

/* model styles */
.modelInput input[type=text] {
    background: #FFFFFF;
    border: 1px solid #D1CDCD;
    border-radius: 5px;
    height: 24px;
    width: 100%;
}

.sectionUnderlineModel {
    margin-top: 0px;
}

/* model styles */
.modelInput input[type=text] {
    background: #FFFFFF;
    border: 1px solid #A1A3A8;
    border-radius: 5px;
    height: 24px;
    width: 100%;
}

/* LCD */

.lcdSec {
    /* display: flex; */
    /* align-items: center; */
    /* justify-content: center; */
    width: 80%;
}

.lcdLable {
    font-size: 15px;
    font-weight: 500;
}

.lcdCheq input[type='checkbox'] {
    height: 20px;
    width: 20px;
}

.motherboedSec,
.batterySec {
    display: flex;
    flex-direction: column;
    /* width: 80%; */
    /* justify-content: center; */
    align-items: center;
}

.mbLable,
.btryLbl {
    font-size: 15px;
    font-weight: 500;
}

.mbCheq input[type='radio'] {
    height: 15px;
    width: 15px;
}

.btryLbl input[type='radio'] {
    height: 15px;
    width: 15px;
    margin-right: 5px;
}

.DropDown {
    height: 30px;
    width: 100%;
    border-radius: 5px;
    border: 1px solid #D1CDCD;
    /* padding: 0px 10px; */
}

/*  */
.btnT {
    background: #FFFFFF;
    border: 2px solid #168EB4;
    border-radius: 5px;
    font-weight: 600;
    font-size: 15px;
    padding: 5px 10px;
}

.btnT2 {
    background: #FFFFFF;
    border: 2px solid #168EB4;
    border-radius: 5px;
    font-weight: 600;
    font-size: 10px;
    padding: 5px 10px;
}

.radioSec {
    display: flex;
    align-items: center;
    gap: 3px;
}

/*  */
.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}

#btryPNSec {
    display: none;
}
  </style>
  <?php 
  $connection = mysqli_connect("localhost", "root", "", "main_project");
  $inventory_id=$_GET["qr_id"];
  $query="SELECT brand,model,core,generation,processor,speed,lcd_size,touch_or_none_touch ,keyboard_backlight,screen_resolution FROM main_inventory_informations WHERE inventory_id='$inventory_id'";
  $query_run=mysqli_query($connection,$query);
  while($row = mysqli_fetch_array($query_run)){
    $brand= $row['brand'];
    $model= $row['model'];
    $core= $row['core'];
    $generation= $row['generation'];
    $processor= $row['processor'];
    $speed= $row['speed'];
    $lcd_size= $row['lcd_size'];
    $touch_or_none_touch = $row['touch_or_none_touch'];
    $keyboard_backlight = $row['keyboard_backlight'];
    $resolution = $row['screen_resolution'];
  }
  echo "

 
              <div class='modal-body'>
                  <div class='orderDetailSec'>
                      <!-- Order Details -->


                      <!-- Scaned laptop Details -->


                      <div class='text-center mb-1 mt-3'>
                          <div class='createListingHeading text-info'>
                              Scanned Laptop Details
                          </div>
                      </div>
                      <hr class='sectionUnderlineModel'>
                      <div class='row mb-1'>
                          <div class='col-lg-4 col-sm-6'>
                              <div class='row'>
                                  <div class='col-4 modelLable'>ASIN</div>
                                  <div class='col-7 modelInput'>
                                      <input class='w-100' type='text'>
                                  </div>
                              </div>
                          </div>
                          
                          <div class='col-lg-4 col-sm-6'>
                              <div class='row'>
                                  <div class='col-4 modelLable'>Backlight</div>
                                  <div class='col-7 modelInput'>
                                      <input class='w-100' type='text' placeholder='$keyboard_backlight' > 
                                  </div>
                              </div>
                          </div>
                          <div class='col-lg-4 col-sm-6'>
                              <div class='row'>
                                  <div class='col-4 modelLable'></div>
                                  <div class='col-7 modelInput'>
                                      <!-- <input type='text'> -->
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class='row mb-1'>
                          <div class='col-lg-4 col-sm-6'>
                              <div class='row'>
                                  <div class='col-4 modelLable'>Brand</div>
                                  <div class='col-7 modelInput'>
                                      <select name='' id='brand' class='DropDown'>
                                          <option selected >$brand</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class='col-lg-4 col-sm-6'>
                              <div class='row'>
                                  <div class='col-4 modelLable'>Model</div>
                                  <div class='col-7 modelInput'>
                                      <select name='' id='model' class='DropDown'>
                                          <option selected>$model</option>

                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class='col-lg-4 col-sm-6'>
                              <div class='row'>
                                  <div class='col-4 modelLable'>Processor</div>
                                  <div class='col-7 modelInput'>
                                      <select name='' id='processor' class='DropDown'>
                                          <option selected >$processor</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class='row mb-1'>
                          <div class='col-lg-4 col-sm-6'>
                              <div class='row'>
                                  <div class='col-4 modelLable'>Core</div>
                                  <div class='col-7 modelInput'>
                                      <select name='' id='core' class='DropDown'>
                                          <option selected >$core</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class='col-lg-4 col-sm-6'>
                              <div class='row'>
                                  <div class='col-4 modelLable'>Gen</div>
                                  <div class='col-7 modelInput'>
                                      <select name='' id='gen' class='DropDown'>
                                          <option selected >$generation</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class='col-lg-4 col-sm-6'>
                              <div class='row'>
                                  <div class='col-4 modelLable'>Speed</div>
                                  <div class='col-7 modelInput'>
                                      <select name='' id='speed' class='DropDown'>
                                          <option selected >$speed</option>

                                      </select>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class='row mb-1'>
                          <div class='col-lg-4 col-sm-6'>
                              <div class='row'>
                                  <div class='col-4 modelLable'>Screen Size</div>
                                  <div class='col-7 modelInput'>
                                      <select name='' id='screen' class='DropDown'>
                                          <option selected >$lcd_size</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class='col-lg-4 col-sm-6'>
                              <div class='row'>
                                  <div class='col-4 modelLable'>Resolution</div>
                                  <div class='col-7 modelInput'>
                                      <select name='' id='res' class='DropDown'>
                                          <option selected >$resolution</option>

                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class='col-lg-4 col-sm-6'>
                              <div class='row'>
                                  <div class='col-4 modelLable'>Touch</div>
                                  <div class='col-7 modelInput'>
                                      <select name='' id='touch' class='DropDown'>
                                          <option selected >$touch_or_none_touch</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- LCD Sec -->

                      <div class='text-center mb-1 mt-3'>
                          <div class='createListingHeading text-info'>
                              LCD
                          </div>
                      </div>
                      <hr class='sectionUnderlineModel'>

                      <div class='row lcdSec mx-auto'>
                          <div class='col-lg-6 col-sm-12'>
                              <div class='row'>
                                  <div class='col-7 lcdLable'>
                                      Scratch (PGP)
                                  </div>
                                  <div class='col-4 lcdCheq'>
                                      <input type='checkbox' id='scrtch' name='scrtch' value='1'>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class='row lcdSec mx-auto'>
                          <div class='col-lg-6 col-sm-12'>
                              <div class='row'>
                                  <div class='col-7 lcdLable'>
                                      Spot (ZGP+SGP)
                                  </div>
                                  <div class='col-4 lcdCheq'>
                                       <input type='checkbox' id='spt' name='spt' value='1'>
                                  </div>
                              </div>
                          </div>
                          <div class='col-lg-6 col-sm-12'>
                              <div class='row'>
                                  <div class='col-7 lcdLable'>
                                      Yellow Shadow LCD
                                  </div>
                                  <div class='col-4 lcdCheq'>
                                       <input type='checkbox' id='ylwsdw' name='ylwsdw' value='1'>
                                  </div>
                              </div>
                          </div>

                      </div>
                      <div class='row lcdSec mx-auto'>
                          <div class='col-lg-6 col-sm-12'>
                              <div class='row'>
                                  <div class='col-7 lcdLable'>
                                      Broken LCD
                                  </div>
                                  <div class='col-4 lcdCheq'>
                                       <input type='checkbox' id='brkn' name='brkn' value='1'>
                                  </div>
                              </div>
                          </div>
                          <div class='col-lg-6 col-sm-12'>
                              <div class='row'>

                              </div>
                          </div>

                      </div>

                      <!--  -->

                      <!-- Motherboard -->



                      <div class='text-center mb-1 mt-3'>
                          <div class='createListingHeading text-info'>
                              Motherboard
                          </div>
                      </div>
                      <hr class='sectionUnderlineModel'>
                      <div class='row motherboedSec'>
                          <nav>
                            <div class='nav nav-tabs' id='nav-tab' role='tablist'>
                            ";
                          if($brand=='hp'){
                            echo"<div class='nav-item nav-link active' id='nav-hp-tab' data-toggle='tab' href='#nav-hp'
                                      role='tab' aria-controls='nav-hp' aria-selected='true'>HP
                                  </div>";
                          }elseif($brand=='dell'){
                             echo"<div class='nav-item nav-link' id='nav-dell-tab' data-toggle='tab' href='#nav-dell'
                                      role='tab' aria-controls='nav-dell' aria-selected='false'>
                                      Dell</div>";
                          }elseif($brand=='lenovo'){
                             echo"<div class='nav-item nav-link' id='nav-lenovo-tab' data-toggle='tab'
                                      href='#nav-lenovo' role='tab' aria-controls='nav-lenovo' aria-selected='false'>
                                      Lenovo</div>";
                          }else{
                             echo"<div class='nav-item nav-link' id='nav-other-tab' data-toggle='tab' href='#nav-other'
                                      role='tab' aria-controls='nav-other' aria-selected='false'>Other Brand</div>";
                          } 
                          echo"
                              </div>
                          </nav>
                          <div class='tab-content w-100' id='nav-tabContent'>
                              <div class='tab-pane fade show active' id='nav-hp' role='tabpanel'
                                  aria-labelledby='nav-hp-tab'>
                                  <div class='row' style='justify-content: center;'>
                                      <div class='row mt-2' style='width: 70%;'>
                                          <div class='col-7 mbLable'>Bios Lock</div>
                                          <div class='col-5 mbCheq'>
                                              <div class='row'>
                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='bios' id='bios' value='1'>
                                                      <span style='font-size: 15px;'>Lock</span>
                                                  </div>
                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='bios' id='bios' checked>
                                                      <span style='font-size: 15px;'>OK</span>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                      <div class='row mt-2' style='width: 70%;'>
                                          <div class='col-7 mbLable'>Computrace / Absolute Software Lock</div>
                                          <div class='col-5 mbCheq'>
                                              <div class='row'>
                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='com' id='com' value='1'>
                                                      <span style='font-size: 15px;'>Activate</span>
                                                  </div>

                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='com' id='com' checked>
                                                      <span style='font-size: 15px;'>Inactive</span>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                      <div class='row mt-2' style='width: 70%;'>
                                          <div class='col-7 mbLable'>Me Region Lock</div>
                                          <div class='col-5 mbCheq'>
                                              <div class='row'>
                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='hpRegionLock' id='hpRegionLock' value='1'>
                                                      <span style='font-size: 15px;'>Lock</span>
                                                  </div>

                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='hpRegionLock' id='hpRegionUnLock' checked>
                                                      <span style='font-size: 15px;'>OK</span>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>


                              </div>
                              <div class='tab-pane fade' id='nav-dell' role='tabpanel' aria-labelledby='nav-dell-tab'>

                                  <div class='row' style='justify-content: center;'>
                                      <div class='row mt-2' style='width: 70%;'>
                                          <div class='col-5 mbLable'>Bios Lock</div>
                                          <div class='col-7 mbCheq'>
                                              <div class='row'>
                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='bios' id='bios' value='1'>
                                                      <span style='font-size: 15px;'>Lock</span>
                                                  </div>

                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='bios' id='bios' checked>
                                                      <span style='font-size: 15px;'>OK</span>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                      <div class='row mt-2' style='width: 70%;'>
                                          <div class='col-5 mbLable'>Computrace Lock</div>
                                          <div class='col-7 mbCheq'>
                                              <div class='row'>
                                                  <div class='col-lg-4 col-sm-6 radioSec'>
                                                      <input type='radio' name='com' id='com' value='1'>
                                                      <span style='font-size: 15px;'>Active</span>
                                                  </div>

                                                  <div class='col-lg-4 col-sm-6 radioSec'>
                                                      <input type='radio' name='com' id='com' value='1'>
                                                      <span style='font-size: 15px;'>Disable</span>
                                                  </div>
                                                  <div class='col-lg-4 col-sm-6 radioSec'>
                                                      <input type='radio' name='com' id='com' checked>
                                                      <span style='font-size: 15px;'>Deactive</span>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                      <div class='row mt-2' style='width: 70%;'>
                                          <div class='col-5 mbLable'>TPM Lock</div>
                                          <div class='col-7 mbCheq'>
                                              <div class='row'>
                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='tpm' id='tpm' value='1'>
                                                      <span style='font-size: 15px;'>Lock</span>
                                                  </div>

                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='tpm' id='tpm' checked>
                                                      <span style='font-size: 15px;'>OK</span>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <div class='tab-pane fade' id='nav-lenovo' role='tabpanel'
                                  aria-labelledby='nav-lenovo-tab'>
                                  <div class='row' style='justify-content: center;'>
                                      <div class='row mt-2' style='width: 70%;'>
                                          <div class='col-7 mbLable'>Bios Lock</div>
                                          <div class='col-5 mbCheq'>
                                              <div class='row'>
                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='bios' id='bios' value='1'>
                                                      <span style='font-size: 15px;'>Lock</span>
                                                  </div>

                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='bios' id='lenovoBiosUnLock' checked>
                                                      <span style='font-size: 15px;'>OK</span>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                      <div class='row mt-2' style='width: 70%;'>
                                          <div class='col-7 mbLable'>Computrace Lock</div>
                                          <div class='col-5 mbCheq'>
                                              <div class='row'>
                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='com'
                                                          id='com' value='1'>
                                                      <span style='font-size: 15px;'>Lock</span>
                                                  </div>

                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='com'
                                                          id='com' checked>
                                                      <span style='font-size: 15px;'>OK</span>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                      <div class='row mt-2' style='width: 70%;'>
                                          <div class='col-7 mbLable'>Any Other Error</div>
                                          <div class='col-5 mbCheq'>
                                              <div class='row'>
                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='lenovoOtherErr' id='lenovoOtherErr' value='1'>
                                                      <span style='font-size: 15px;'>Have</span>
                                                  </div>

                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='lenovoOtherErr' id='lenovoNoOtherErr' checked>
                                                      <span style='font-size: 15px;'>No Have</span>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <div class='tab-pane fade' id='nav-other' role='tabpanel' aria-labelledby='nav-other-tab'>

                                  <div class='row' style='justify-content: center;'>
                                      <div class='row mt-2' style='width: 70%;'>
                                          <div class='col-7 mbLable'>Bios Lock</div>
                                          <div class='col-5 mbCheq'>
                                              <div class='row'>
                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='bios' id='bios' value='1'>
                                                      <span style='font-size: 15px;'>Lock</span>
                                                  </div>

                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='bios' id='otherBiosUnLock' checked>
                                                      <span style='font-size: 15px;'>OK</span>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                      <div class='row mt-2' style='width: 70%;'>
                                          <div class='col-7 mbLable'>Computrace Lock</div>
                                          <div class='col-5 mbCheq'>
                                              <div class='row'>
                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='com' id='com' value='1'>
                                                      <span style='font-size: 15px;'>Lock</span>
                                                  </div>

                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='com' id='com' checked>
                                                      <span style='font-size: 15px;'>OK</span>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                      <div class='row mt-2' style='width: 70%;'>
                                          <div class='col-7 mbLable'>Any Other Error</div>
                                          <div class='col-5 mbCheq'>
                                              <div class='row'>
                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='otherErr' id='otherErr' value='1'>
                                                      <span style='font-size: 15px;'>Have</span>
                                                  </div>

                                                  <div class='col-6 radioSec'>
                                                      <input type='radio' name='otherErr' id='otherNoErr' checked>
                                                      <span style='font-size: 15px;'>No Have</span>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>

                      <!-- Battery -->
                      <div class='text-center mb-1 mt-3'>
                          <div class='createListingHeading text-info'>
                              Battery
                          </div>
                      </div>
                      <hr class='sectionUnderlineModel'>
                      <div class='batterySec row'>
                          

                          <div class='tab-content w-100' id='nav-tabContent'>
                              <div class='tab-pane fade show active' id='nav-dellBattery' role='tabpanel'
                                  aria-labelledby='nav-dellBattery-tab'>
                                  <div class='row' style='justify-content: center;'>
                                      <div class='row btryLbl my-2' style='width: 70%;'>Battery Health</div>
                                      <div class='row' style='width: 70%;'>
                                          <div class='col-6'>
                                              <div class='row align-items-center'>
                                                  <div class='col-6 btryLbl radioSec'>
                                                      <input class='' type='radio' name='battery' id='excellent'>100 -
                                                      80
                                                  </div>
                                                  <div class='col-6 btryLbl'>
                                                      Excellent
                                                  </div>
                                              </div>


                                          </div>
                                          <div class='col-6'>
                                              <div class='row'>
                                                  <div class='col-6 btryLbl radioSec'>
                                                      <input class='' type='radio' name='battery' id='Good'>80
                                                      - 55
                                                  </div>
                                                  <div class='col-6 btryLbl'>Good</div>
                                              </div>
                                          </div>
                                          <div class='col-6'>
                                              <div class='row'>
                                                  <div class='col-6 btryLbl radioSec'>
                                                      <input class='' type='radio' name='battery' id='weak'>50
                                                      - 0
                                                  </div>
                                                  <div class='col-6 btryLbl'>Weak</div>
                                              </div>
                                          </div>

                                      </div>

                                  </div>
                                  <div class='row batterySec'>
                                      <div class='mt-3' >
                                          Scan PN &nbsp;
                                          <input type='text' id='btryPN'>
                                      </div>
                                      <br>
                                      <div style='color: #BB0000; font-size:15px; font-weight:700'>Remove Battery
                                          And
                                          Confirm</div>
                                  </div>

                              </div>
                          </div>
                          <input type='text' name='qr_number' id='qr_number' value='$inventory_id'>
                          <div class='row batterySec my-2'>
                              <button class='btn btnT' type='submit' name='submit'>Confirm</button>
                          </div>

                      </div>
                  </div>

              </div>
    ";

  ?>
  <script>
const displayPN = () => {

    // console.log($("#weak").val);
    // $("#radio_1").prop("checked", true);
    if ($("#weak").prop("checked", true)) {
        // console.log("checked");
        $('#btryPNSec').css('display', 'block');
    } else {
        $('#btryPNSec').css('display', 'none');
    }

}

const undisplayPN = () => {
    if ($("#good").prop("checked", true) || $("#excellent").prop("checked", true)) {
        $('#btryPNSec').css('display', 'none');
    }

}
  </script>