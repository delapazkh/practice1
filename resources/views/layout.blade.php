<html>
  <head>
      <title>@yield('title', 'Default title')</title>
  </head>
  <body>
    <ul>
      <li><a href="/contact">Contact us</a></li>
      <li><a href="/about">About us</a></li>
    </ul>
    @yield('content')
  </body>
</html>
