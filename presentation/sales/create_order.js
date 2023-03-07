    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        });
    });

    function getTot() {
        var qty = $('#orderQty').val();
        var x = parseInt(qty);

        var unitPrice = $('#unitPrice').val();
        var y = parseInt(unitPrice);

        var discount = $('#discount').val();
        var z = parseInt(discount);

        var a = x * y;
        var b = a * (z / 100);
        var t = a - b;
        console.log(t);

        $('#tot').val(t);
    }

    $(document).ready(function() {
        $("#country_name").on("change", function() {
            var country_name = $("#country_name").val();
            console.log(country_name)
            var getURL = "./addNew/daily/get_phone_code.php?country_name=" + country_name;
            $.get(getURL, function(data, status) {
                $("#country_code").html(data);
            });
        });
    });

    $(document).ready(function() {
        $("#device").on("change", function() {
            var device = $("#device").val();
            var getURL = "./addNew/order/get_order_details.php?device=" + device;
            $.get(getURL, function(data, status) {
                $("#brand").html(data);
            });
        });
    });

    $(document).ready(function() {
        $("#brand").on("change", function() {
            var brand = $("#brand").val();
            var getURL = "./addNew/order/get_order_details.php?brand=" + brand;
            $.get(getURL, function(data, status) {
                $("#model").html(data);
            });
        });
    });

    $(document).ready(function() {
        $("#model").on("change", function() {
            var model = $("#model").val();
            var getURL = "./addNew/order/get_order_details.php?model=" + model;
            $.get(getURL, function(data, status) {
                $("#processor").html(data);
            });
        });
    });

    $(document).ready(function() {
        $("#processor").on("change", function() {
            var processor = $("#processor").val();
            var getURL = "./addNew/order/get_order_details.php?processor=" + processor;
            $.get(getURL, function(data, status) {
                $("#core").html(data);
            });
        });
    });

    $(document).ready(function() {
        $("#core").on("change", function() {
            var core = $("#core").val();
            var getURL = "./addNew/order/get_order_details.php?core=" + core;
            $.get(getURL, function(data, status) {
                $("#generation").html(data);
            });
        });
    });

    $(document).ready(function() {
        $("#generation").on("change", function() {
            var generation = $("#generation").val();
            var getURL = "./addNew/order/get_order_details.php?generation=" + generation;
            $.get(getURL, function(data, status) {
                $("#speed").html(data);
            });
        });
    });

    $(document).ready(function() {
        $("#speed").on("change", function() {
            var speed = $("#speed").val();
            var getURL = "./addNew/order/get_order_details.php?speed=" + speed;
            $.get(getURL, function(data, status) {
                $("#lcd_size").html(data);
            });
        });
    });