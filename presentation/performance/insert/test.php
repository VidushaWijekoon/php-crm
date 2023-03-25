<?php
session_start();
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// warehouse_information_sheet to main_inventory_informations 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$connection = mysqli_connect("localhost", "root", "", "main_project");
$query="SELECT * FROM warehouse_information_sheet ";
echo $query;
$query_run=mysqli_query($connection,$query);

$inventory_id=0;
    $mfg=0;
    $device=0;
    $processor=0;
    $core=0;
    $generation=0;
    $model=0;
    $qr_image=0;
    $create_date=0;
    $location=0;
    $brand=0;
    $create_by_inventory_id=0;
    $send_to_production=0;
    $send_time_to_production=0;
    $sales_order_id=0;
    $dispatch=0;
    $machine_from_supplier_id=0;
    $series=0;
    $speed=0;
    $battery=0;
    $lcd_size=0;
    $touch_or_non_touch=0;
    $bios_lock=0;
    $dvd=0;
    $screen_resolution=0;
    $ram=0;
    $hdd_capacity=0;
    $touch_wholesale_price=0;
    $non_touch_wholesale_price=0;
    $sale_set_hdd=0;
    $sale_set_ram=0;
    $price_set_by=0;
    $price_set_time =0;
    foreach($query_run as $data){
    $inventory_id =$data['inventory_id'];
    $mfg =$data['mfg'];
    $device =$data['device'];
    $processor =$data['processor'];
    $core =$data['core'];
    $generation =$data['generation'];
    $model =$data['model'];
    $qr_image =$data['qr_image'];
    $create_date =$data['create_date'];
    $location =$data['location'];
    $brand =$data['brand'];
    $create_by_inventory_id =$data['create_by_inventory_id'];
    $send_to_production =$data['send_to_production'];
    $send_time_to_production =$data['send_time_to_production'];
    $sales_order_id =$data['sales_order_id'];
    $dispatch =$data['dispatch'];
    $machine_from_supplier_id =$data['machine_from_supplier_id'];
    $series =$data['series'];
    $speed =$data['speed'];
    $battery =$data['battery'];
    $lcd_size =$data['lcd_size'];
    $touch_or_non_touch =$data['touch_or_non_touch'];
    $bios_lock =$data['bios_lock'];
    $dvd =$data['dvd'];
    $screen_resolution =$data['screen_resolution'];
    $ram =$data['ram'];
    $hdd_capacity =$data['hdd_capacity'];
    $touch_wholesale_price =$data['touch_wholesale_price'];
    $non_touch_wholesale_price =$data['non_touch_wholesale_price'];
    $sale_set_hdd =$data['sale_set_hdd'];
    $sale_set_ram =$data['sale_set_ram'];
    $price_set_by =$data['price_set_by'];
    $price_set_time =$data['price_set_time'];

    $sql="INSERT INTO `main_inventory_informations`(
    `inventory_id`,
    `machine_id`,
    `device`,
    `brand`,
    `model`,
    `processor`,
    `series`,
    `core`,
    `generation`,
    `create_date`,
    `location`,
    `create_by_inventory_id`,
    `send_to_production`,
    `send_time_to_production`,
    `sales_order_id`,
    `dispatch`,
    `mfg`,
    `speed`,
    `battery`,
    `lcd_size`,
    `touch_or_none_touch`,
    `bios_lock`,
    `optical`,
    `screen_resolution`,
    `ram`,
    `hdd_capacity`,
    `touch_wholesale_price`,
    `non_touch_wholesale_price`,
    `sale_set_ram`,
    `sale_set_hdd`,
    `price_set_time`,
    `price_set_by`
)
VALUES(
    '$inventory_id',
    '$machine_from_supplier_id',
    '$device',
    '$brand',
    '$model',
    '$processor',
    '$series',
    '$core',
    '$generation',
    '$create_date',
    '$location',
    '$create_by_inventory_id',
    '$send_to_production',
    '$send_time_to_production',
    '$sales_order_id',
    '$dispatch',
    '$mfg',
    '$speed',
    '$battery',
    '$lcd_size',
    '$touch_or_non_touch',
    '$bios_lock',
    '$dvd',
    '$screen_resolution',
    '$ram',
    '$hdd_capacity',
    '$touch_wholesale_price',
    '$non_touch_wholesale_price',
    '$sale_set_ram',
    '$sale_set_hdd',
    '$price_set_time',
    '$price_set_by'
)";
    
    $sql_run=mysqli_query($connection,$sql);
    }
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 // performance_record_table to performance_records                                                                                   //
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sql="SELECT * FROM `performance_record_table`";
$sql_run=mysqli_query($connection,$sql);
$performance_id =0;
    $user_id =0;
    $department_id =0;
    $qr_number =0;
    $mfg_code =0;
    $model =0;
    $job_description =0;
    $start_time =0;
    $end_time =0;
    $spend_time =0;
    $target =0;
    $production =0;
    $technician_id =0;
    $charger =0;
    $model_pack =0;
    $charger_pack =0;
    $sales_order =0;
    $previous_work =0;
    $lcd_p_n_code =0;
    $status =0;
foreach($sql_run as $data){
    $performance_id =$data['performance_id'];
    $user_id =$data['user_id'];
    $department_id =$data['department_id'];
    $qr_number =$data['qr_number'];
    $mfg_code =$data['mfg_code'];
    $model =$data['model'];
    $job_description =$data['job_description'];
    $start_time =$data['start_time'];
    $end_time =$data['end_time'];
    $spend_time =$data['spend_time'];
    $target =$data['target'];
    $production =$data['production'];
    $technician_id =$data['technician_id'];
    $charger =$data['charger'];
    $model_pack =$data['model_pack'];
    $charger_pack =$data['charger_pack'];
    $sales_order =$data['sales_order'];
    $previous_work =$data['previous_work'];
    $lcd_p_n_code =$data['lcd_p_n_code'];
    $status =$data['status'];
    
    $query="INSERT INTO `performance_records`(
    `performance_id`,
    `user_id`,
    `department_id`,
    `qr_number`,
    `mfg_code`,
    `model`,
    `job_description`,
    `start_time`,
    `end_time`,
    `spend_time`,
    `target`,
    `production`,
    `technician_id`,
    `charger`,
    `model_pack`,
    `charger_pack`,
    `sales_order`,
    `previous_work`,
    `lcd_p_n_code`,
    `status`
)
VALUES(
    '$performance_id',
    '$user_id',
    '$department_id',
    '$qr_number',
    '$mfg_code',
    '$model',
    '$job_description',
    '$start_time',
    '$end_time',
    '$spend_time',
    '$target',
    '$production',
    '$technician_id',
    '$charger',
    '$model_pack',
    '$charger_pack',
    '$sales_order',
    '$previous_work',
    '$lcd_p_n_code',
    '$status',
)";
$sql_run=mysqli_query($connection,$query);
    
}
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 // performance_record_table to performance_records                                                                                   //
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////'

$query="SELECT
    main_inventory_informations.mfg,
    main_inventory_informations.brand,
    main_inventory_informations.model,
    main_inventory_informations.processor,
    main_inventory_informations.core,
    main_inventory_informations.generation,
    main_inventory_informations.speed,
    main_inventory_informations.lcd_size,
    main_inventory_informations.screen_resolution,
    main_inventory_informations.touch_or_none_touch,
    main_inventory_informations.hdd_capacity,
    main_inventory_informations.ram,
    main_inventory_informations.keyboard_backlight
FROM
    main_inventory_informations
LEFT JOIN e_com_inventory ON e_com_inventory.mfg = main_inventory_informations.mfg
 GROUP BY e_com_inventory.mfg;";
?>