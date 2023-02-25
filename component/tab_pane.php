<?php
session_start();
require_once('../includes/header.php')
?>

<div class="inventorySec row ml-2 mt-3">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <div class="nav-item nav-link" id="nav-monitor-tab" data-toggle="tab" href="#nav-monitor" role="tab"
                aria-controls="nav-monitor" aria-selected="true">Monitor
            </div>
            <div class="nav-item nav-link active" id="nav-desktop-tab" data-toggle="tab" href="#nav-desktop" role="tab"
                aria-controls="nav-desktop" aria-selected="false">Desktop
            </div>
            <div class="nav-item nav-link" id="nav-keyboard-tab" data-toggle="tab" href="#nav-keyboard" role="tab"
                aria-controls="nav-keyboard" aria-selected="false">
                Keyboard</div>
            <div class="nav-item nav-link" id="nav-mouse-tab" data-toggle="tab" href="#nav-mouse" role="tab"
                aria-controls="nav-mouse" aria-selected="false">Mouse
            </div>
            <div class="nav-item nav-link" id="nav-charger-tab" data-toggle="tab" href="#nav-charger" role="tab"
                aria-controls="nav-charger" aria-selected="false">Charger
            </div>
        </div>
    </nav>

    <div class="tab-content w-100" id="nav-tabContent">
        <div class="tab-pane fade show " id="nav-monitor" role="tabpanel" aria-labelledby="nav-monitor-tab">
            <div class="row" style="justify-content: center;">
                Monitor
            </div>
        </div>
        <div class="tab-pane fade show active" id="nav-desktop" role="tabpanel" aria-labelledby="nav-desktop-tab">
            <div class="row" style="justify-content: center;">
                Desktop
            </div>


        </div>
        <div class="tab-pane fade show " id="nav-keyboard" role="tabpanel" aria-labelledby="nav-keyboard-tab">
            <div class="row" style="justify-content: center;">
                Keyboard
            </div>
        </div>
        <div class="tab-pane fade show " id="nav-mouse" role="tabpanel" aria-labelledby="nav-mouse-tab">
            <div class="row" style="justify-content: center;">
                Mouse
            </div>
        </div>
        <div class="tab-pane fade show " id="nav-charger" role="tabpanel" aria-labelledby="nav-charger-tab">
            <div class="row" style="justify-content: center;">
                Charger
            </div>
        </div>
    </div>



    <div class="row batterySec my-2">
        <div class="btn btnT">Confirm</div>
    </div>

</div>

<?php
require_once('../includes/footer.php')

?>