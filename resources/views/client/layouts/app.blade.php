<!DOCTYPE html>
<html lang="en">
<head>



<!-- {{ asset('js/app.js') }} -->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicons Icon -->
<link rel="icon" href="{{ asset('images/logo.jpg')}}" type="image/x-icon" />
<link rel="shortcut icon" href="#" type="image/x-icon" />
<title> web site title  </title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS Style -->
</head>
<body>
  <h1>Header client side </h1>
  <hr>
  
 @yield('content')

<hr>
<h1>Footer Clint Side</h1>
</body>
</html>