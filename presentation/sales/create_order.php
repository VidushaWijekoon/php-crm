<?php 

require_once('../includes/header.php')

?>

<style>
.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}

.pageNameIcon {
    font-size: 25px;
    margin-right: 05px;
}

.pageName {
    font-size: 20px;
    margin-top: 5px;
    font-weight: bold;
}

.ecomOrderFormSec {
    display: flex;
    align-items: center;
    justify-content: center;

}

.cardContainer {
    width: 99%;
    background-color: #ffffff;
    padding: 10px 5px;
}

.createListingHeading {
    font-weight: 600;
    font-size: 20px;
}

.sectionUnderline {
    border-top: 2px solid #DBDBDB;
    margin-top: 0px;
}

.formSec {
    padding: 0px 20px;
}

.platformes {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.DropDown {
    height: 30px;
    width: 100%;
    border-radius: 5px;
    border: 1px solid #D1CDCD;
    /* padding: 0px 10px; */
}

.lableSec {
    font-weight: 500;
    font-size: 12px;
}

.inputSec input[type="text"] {
    height: 30px;
    border-radius: 5px;
    border: 1px solid #D1CDCD;
    width: 100%;
}

.required:after {
    content: " *";
    color: red;
}

.select2-container--default .select2-selection--single {
    padding: 2px;

}
</style>


<div class="row">
    <i class="pageNameIcon fa-solid fa-shopping-cart mx-2"></i>
    <h6 class="pageName pt-1">Create New Order</h6>
</div>

<div class="row">
    <div class="col col-sm-8 col-lg-8 bg-white">
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </div>
</div>



<script src="../../plugins/select2/js/select2.full.min.js"></script>
<script src="../../plugins/jquery/jquery.min.js"></script>

<script>
$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

})
</script>

<?php require_once('../includes/footer.php'); ?>