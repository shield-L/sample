<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>@yield('head', 'Sample App')</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="/css/app.css" rel="stylesheet">
</head>
<body>
    @include('layouts._header')
    <div class="container">
      @include('shared._messages')
      @yield('content')
      @include('layouts._footer')
    </div>
</body>
</html>