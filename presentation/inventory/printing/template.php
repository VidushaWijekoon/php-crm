
<!DOCTYPE html>

<html>
<head>


    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <style type="text/css">
        .navbar-custom {
	background-color:#244157;
    color:#ffffff;
  	border-radius:0;
}
  
.navbar-custom .navbar-nav > li > a {
  	color:#fff;
}
.navbar-custom .navbar-nav > .active > a, .navbar-nav > .active > a:hover, .navbar-nav > .active > a:focus {
    color: #ffffff;
	background-color:transparent;
}
      
.navbar-custom .navbar-nav > li > a:hover, .nav > li > a:focus {
    text-decoration: none;
    background-color:#acdaee;
}
      
.navbar-custom .navbar-brand {
  	color:#eeeeee;
}
.navbar-custom .navbar-toggle {
  	background-color:#eeeeee;
}
.navbar-custom .icon-bar {
  	background-color:#acdaee;
}


.round.white {
    background-color: #fff; color:#244157
}
.round {
    display: inline-block;
    height: 32px;
    width: 32px;
    line-height: 32px;
    -moz-border-radius: 16px;
    border-radius: 16px;
    background-color: #222;
    color: #FFF;
    text-align: center;
}

.icon {
    color:firebrick;
}
    

        <?php echo isset($style)?$style:''; ?>
      
      </style>

      <?php echo isset($head)?$head:''; ?>
      
</head>
<body>
    
       
        <?php echo isset($content)?$content:''; ?>

    
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-2.2.0.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/bootstrap.min.js"></script>
    
    <?php echo isset($script)?$script:''; ?>
      
</body>
</html>
