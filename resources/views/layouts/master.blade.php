<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>VFW Rental Management System | @yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ asset("bootstrap-3.3.5/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("/css/template.css") }}" rel="stylesheet">
    
    <!--Date picker-->
    <link href="{{ asset("/css/datepicker.css") }}" rel="stylesheet">
    <script src="{{ asset("js/bootstrap-datepicker.js") }}"></script>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset("bootstrap-3.3.5/js/bootstrap.min.js") }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
    
</head>
<body>
    <div class="container">
        <div style="margin: 15px 0px;">
            <div class="col-md-1"><img src="{{ asset("/images/logo.jpeg") }}" width="80px;" alt="logo" title="logo" /></div>
            <div class="col-md-10"><h1>VFW Rental Management System</h1></div>
            <div style="clear: both;"></div>
        </div>
        @yield('content') 
    </div>    
</body>
</html>