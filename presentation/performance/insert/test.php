<?php
session_start();
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


?>