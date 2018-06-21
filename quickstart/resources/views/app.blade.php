<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ trans('home.title') }}</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="app-layout" >
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ trans('home.new_task') }}
                </a>
            </div>
        </div>
    </nav>         
    @yield('content')
    <!-- JavaScripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
