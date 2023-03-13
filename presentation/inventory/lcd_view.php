<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "main_project");
$q = $_GET['q'];

?>
<style>
table tr {
    padding: 20px;
    text-align: center;
}
</style>
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
    /* height: 75vh; */
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



.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}


/* Card 1 --Count showing Styles */
.dashCard {
    /* width: 180px;
    height: 80px; */
    background: #FFFFFF;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
    border-radius: 5px;
    color: black;
    padding: 10px 12px;
}

.dashCardTop {
    /* width: 100%; */
    display: flex;
    justify-content: space-between;
}

/* 
.cardIcon {
    width: 20%;
    padding: 5px 15px;
} */

.cardTitle {
    width: 100%;
    /* padding: 8px 15px; */
    margin-left: 10px;
    margin-top: 2px;
    font-weight: 500;
    font-size: 12px;
    color: #000000;
}

.cardValue {
    font-weight: 550;
    font-size: 15px;
    color: #000000;
    margin-top: 2px;
    margin-left: 5px;

}

/* //////////////////////// */

/* tab pane styles */
.nav-tabs .nav-link.active {
    color: #168EB4;
}

.tabLable {
    font-weight: 700;
}

/*  */
/* table sec */
.tableSec {
    overflow-x: auto;
    width: 100%;
}

.tableSec table {
    width: 100%;
    font-size: 10px;
}

.tableSec table th {
    color: #168EB4;
    font-weight: 700;
    font-size: 10px;
}

/*  */
</style>
<div class="tab-pane fade show" id="nav-Received" role="tabpanel" aria-labelledby="nav-Received-tab">
    <div class="row" style="justify-content: center;">
        <!-- Received Table -->
        <div class="tableSec mx-3">
            <table>
                <thead>
                    <tr>
                        <th>Inventory ID</th>
                        <th>Model</th>
                        <th>Core</th>
                        <th>Generation</th>
                        <th>Sent Date</th>
                        <th>Status</th>
                        <th>Received Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($q==0){
                    $sql="SELECT alsakb_qr,created_date,received_date,status,model,generation,core  FROM issue_laptops LEFT JOIN 
                    main_inventory_informations ON main_inventory_informations.inventory_id=issue_laptops.alsakb_qr WHERE issue_type='1'";
                     $query_run = mysqli_query($connection, $sql);
                    }elseif($q==1){
                        $sql="SELECT alsakb_qr,created_date,received_date,status,model,generation,core  FROM issue_laptops LEFT JOIN 
                        main_inventory_informations ON main_inventory_informations.inventory_id=issue_laptops.alsakb_qr WHERE issue_type='1' AND status='2'";
                         $query_run = mysqli_query($connection, $sql);
                    }elseif($q==2){
                        $sql="SELECT alsakb_qr,created_date,received_date,status,model,generation,core  FROM issue_laptops LEFT JOIN 
                        main_inventory_informations ON main_inventory_informations.inventory_id=issue_laptops.alsakb_qr WHERE issue_type='1' AND status='1'";
                         $query_run = mysqli_query($connection, $sql);
                    }else{
                        $sql="SELECT alsakb_qr,created_date,received_date,status,model,generation,core  FROM issue_laptops LEFT JOIN 
                        main_inventory_informations ON main_inventory_informations.inventory_id=issue_laptops.alsakb_qr WHERE issue_type='1' AND model like '%$q%' ";
                         $query_run = mysqli_query($connection, $sql);
                    }
                     foreach($query_run as $data){
                        if($data['status']==1){
                        $status="Not Started";
                        }elseif($data['status']==2){
                            $status="Completed";
                            }
                    ?>
                    <tr>
                        <td><?php echo $data['alsakb_qr']?></td>
                        <td><?php echo $data['model']?></td>
                        <td><?php echo $data['core']?></td>
                        <td><?php echo $data['generation']?></td>
                        <td><?php echo $data['created_date']?></td>
                        <td><?php echo  $status ?></td>
                        <td><?php echo $data['received_date']?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>