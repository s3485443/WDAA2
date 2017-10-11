<html>
<head>
    <meta charset="utf-8">
    <meta http-equive="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
@include('shared.navbar')
@yield('content')
</body>
</html>