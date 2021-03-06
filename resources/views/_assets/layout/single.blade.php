<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @yield('web_title')
    @include('_assets.inc.head')
  </head>
  <body>
    @include('_assets.partial.navbar')
    <div class="container">
      @yield('content')
    </div>
    @include('_assets.partial.footer')
    @include('_assets.inc.foot')
  </body>
</html>
