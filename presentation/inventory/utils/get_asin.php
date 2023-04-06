<?php
	$connection = mysqli_connect("localhost", "root", "", "wms");
    
	if ( isset($_GET['brand']) ) {
		$model = mysqli_real_escape_string($connection, $_GET['model']);
        $brand = mysqli_real_escape_string($connection, $_GET['brand']);
        $core = mysqli_real_escape_string($connection, $_GET['core']);
        // $speed = mysqli_real_escape_string($connection, $_GET['speed']);
        // $screen_type = mysqli_real_escape_string($connection, $_GET['screen_type']);
		$name = null;
	
		$query 	= "SELECT asin_no,id FROM `asin_details` WHERE model like '%$model%' AND brand='$brand' AND core='$core' GROUP BY asin_no  ";
		$result_set = mysqli_query($connection, $query);
        echo $query;
		$asin = "<option value='0'></option> ";
		while ( $result = mysqli_fetch_assoc($result_set) ) {
			$asin .= "<option value=\"#{$result['id']}-{$result['asin_no']}\" class='info_select'>#{$result['id']}-{$result['asin_no']}</option>";
		}
		echo $asin;
	} 
    if ( isset($_GET['asin']) ) {
		$asin = mysqli_real_escape_string($connection, $_GET['asin']);
		$name = null;
	
		$query 	= "SELECT brand,model,core,ram,hard_disk_capacity,touch_or_none_touch,lcd_size,keyboard_backlight,resolution_type,resolution FROM `asin_details` WHERE  asin_no='$asin' ";
		$result_set = mysqli_query($connection, $query);
		$asin = " ";
        $ram = " ";
        $hard_disk_capacity = " ";
        $brand ='';
        $model='';
        $core='';
        $lcd_size='';
        $screen_resolutiom='';
        $ram='';
        $hard_disk_capacity='';
        $touch_or_none_touch='';
        $keyboard_backlight='';
        $resolution_type='';
        $resolution='';
		while ( $result = mysqli_fetch_assoc($result_set) ) {
            $brand = $result['brand'];
            $model = $result['model'];
            $core = $result['core'];
            $ram = $result['ram'];
            $hard_disk_capacity = $result['hard_disk_capacity']; 
            $lcd_size=$result['lcd_size'];
            $keyboard_backlight=$result['keyboard_backlight'];
            $resolution_type=$result['resolution_type'];
            $resolution=$result['resolution'];
		}
         $asin .= $brand;
            if(!empty($model)){
                $asin .= " / ";
                $asin .= $model;
            }
            if(!empty($core)){
                $asin .= " / ";
                $asin .= $core;
            }
            if(!empty($lcd_size)){
                $asin .= " / ";
                $asin .= $lcd_size;
            }
            if(!empty($keyboard_backlight)){
                $asin .= " / ";
                $asin .= $keyboard_backlight;
            }
            if(!empty($ram)){
                $asin .= " / ";
                $asin .= $ram."GB";
            }
            if(!empty($hard_disk_capacity)){
                $asin .= " / ";
                $asin .= $hard_disk_capacity."GB";
            }
            if(!empty($resolution_type)){
                $asin .= " / ";
                $asin .= $resolution_type;
            }
            if(!empty($resolution)){
                $asin .= " / ";
                $asin .= $resolution;
            }
            
		echo strToUpper($asin);

	} 
	
?>