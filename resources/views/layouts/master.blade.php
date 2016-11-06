<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Laravel social login</title>
 
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
 
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: 'Lato';
        }
 
        .fa-btn {
            margin-right: 6px;
        }
        .user-row {
            margin-bottom: 14px;
        }
 
        .user-row:last-child {
            margin-bottom: 0;
        }
 
        .dropdown-user {
            margin: 13px 0;
            padding: 5px;
            height: 100%;
        }
 
        .dropdown-user:hover {
            cursor: pointer;
        }
 
        .table-user-information > tbody > tr {
            border-top: 1px solid rgb(221, 221, 221);
        }
 
        .table-user-information > tbody > tr:first-child {
            border-top: 0;
        }
 
 
        .table-user-information > tbody > tr > td {
            border-top: 0;
        }
        .toppad
        {margin-top:20px;
        }
 
    </style>
    
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
 
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
 
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('auth/login') }}">
                    Laravel Social Login
                </a>
            </div>
        </div>
    </nav>
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>