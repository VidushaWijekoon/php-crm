<?php 
session_start();
$user_id = $_SESSION['user_id'];
?>
<div class="box3 border" style="display: flex; justify-content: center; align-items: center;" id="printableArea">
    <div class="stikerDetails"> <img style="width: 2.0cm;height: 1.0cm;" src="files/<?php echo $user_id ?> sticker.png">
        <img style="width: 2.0cm;height: 1.0cm;" src="files/<?php echo $user_id ?> sticker.png">
    </div>
</div>
<script>
var int = setInterval('check()', 1000);

function check() {
    if (chobj('div') == true) {
        printDiv('printableArea')
        // window.alert('true');
        int = window.clearInterval(int);
    } else {
        // document.write('<p>false</p>');
    }
}

function chobj(printableArea) {
    return (document.getElementById('printableArea')) ? true : false;
}
document.getElementById("printableArea").innerHTML = x;

function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    window.location.href = '../inventory_add_laptop.php';
}
</script>